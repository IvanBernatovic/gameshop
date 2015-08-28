<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cart;
use App\Http\Requests\Shopping\ShippingAddressRequest;

use Auth;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderProduct;

use Illuminate\Support\Collection;

class OrderController extends Controller
{	

	/**
	 * Shows form for selecting shipping address
	 * @return Response
	 */
    public function show()
    {	
    	\Session::forget('addressData');

    	return view('store.shopping.order-shipping');
    }

    /**
     * Proccess shipping address and returns form for paying and payment method
     * @param  ShippingAddressRequest $request
     * @return Response
     */
    public function proccessShipping(ShippingAddressRequest $request)
    {
    	if($request['shippingAddress'] == 'otherAddress')
    	{
    		$input = $request->all();

	        if($input['country_id'] != 840)
	        {
	            $input['state_id'] = null;
	        }

	        $address = Address::create($input);

    		$request->session()->put('addressId', $address->id);
    	} else {
    		$address = Auth::user()->address;
    	}

    	return view('store.shopping.confirm')->with(compact('address'));
    }


    public function confirm(Request $request)
    {
    	return view('store.shopping.confirm');
    }

    /**
     * Proccess payment
     * @param  Request $request
     * @return Response
     */
    public function pay(Request $request)
    {
    	$user = Auth::user();

    	if($request->session()->has('addressId'))
    	{
    		$address = Address::find($request->session()->get('addressId'));
    		$request->session()->forget('addressId');
    	} else {
    		$address = $user->address;
    	}

    	// array for order data
    	$orderData = [];
    	$orderData['full_price'] = Cart::totalWithShipping();
    	$orderData['user_id'] = $user->id;
    	$orderData['address_id'] = $address->id;

    	if($request->has('stripeToken'))
    	{	
    		\Stripe\Stripe::setApiKey(env('STRIPE_TEST_SECRET_KEY'));
    		$orderData['stripeToken'] = $request->get('stripeToken');
    		$orderData['payment_method_id'] = 1;

    		try
    		{
    			$charge = \Stripe\Charge::create(array(
					"amount" => $orderData['full_price'] * 100,
					"currency" => "usd",
					"source" => $orderData['stripeToken'],
					"description" => "Test charge; user e-mail: " . $user->email)
    			);
    		} catch(\Stripe\Error\Card $e) {
    			$request->session()->flash('status', 'Card declined, please fill your card and try again later.');

    			return redirect('/');
    		}
    	} else {
    		$orderData['payment_method_id'] = 2;
    	}

    	$cartProducts = \Cart::associate('Product', 'App\Models')->content();
		$products = new Collection;
		foreach($cartProducts as $item)
		{
			$products->push(['product' => \App\Models\Product::find($item->id), 
				'quantity' => $item->qty]);
		}

		// Get the order weight
		$orderData['weight'] = 0;
		foreach ($products as $product)
		{
			$orderData['weight'] += $product['product']->weight * $product['quantity'];
		}

		$order = Order::create($orderData);
		foreach ($products as $product)
		{
			OrderProduct::create([
				'order_id' => $order->id,
				'product_id' => $product['product']->id,
				'quantity' => $product['quantity'],
				'price' => (float) $product['product']->price * $product['quantity']
			]);
		}

		Cart::destroy();

		$request->session()->flash('status', 'Order recieved.');

		return redirect('/');
    }
}

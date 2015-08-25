<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cart;
use App\Http\Requests\Shopping\ShippingAddressRequest;

use Auth;
use App\Models\Address;

class OrderController extends Controller
{
    public function show()
    {	
    	\Session::forget('addressData');

    	return view('store.shopping.order-shipping');
    }

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
}

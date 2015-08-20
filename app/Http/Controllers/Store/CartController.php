<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Custom requests
 */
use App\Http\Requests\Shopping\AddToCartRequest;

/**
 * Models
 */
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function add(AddToCartRequest $request)
    {
    	$product = Product::find($request->product_id)->where('active', 1)->first();

    	if($product)
    	{
    		Cart::add($product->id, $product->name, 1, $product->price);
    	}

    	return back();
    }
}

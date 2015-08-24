<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cart;

use Auth;

class OrderController extends Controller
{
    public function show()
    {	
    	return view('store.shopping.order-shipping')->with([
    			'cart' => Cart::instance('main')
			]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Custom models
 */
use App\Models\Order;

class OrderController extends Controller
{	
	/**
	 * Shows table with orders, ordered by status code (pending first) and time created
	 * @return Response
	 */
    public function index()
    {
    	$orders = Order::orderBy('status_code_id')->orderBy('created_at', 'asc')->paginate(20);

    	return view('admin.orders.index')->with(compact('orders'));
    }

    public function show(Order $order)
    {
    	return view('admin.orders.show')->with(compact('order'));
    }

    public function edit(Order $order)
    {
    	return view('admin.orders.edit');
    }
}

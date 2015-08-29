<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Custom requests
 */
use App\Http\Requests\Admin\EditOrderRequest;
use App\Http\Requests\Admin\FilterOrderRequest;

/**
 * Custom models
 */
use App\Models\Order;
use App\Models\StatusCode;

class OrderController extends Controller
{	
    const PAGINATION_SIZE = 20;

	/**
	 * Shows table with orders, ordered by status code (pending first) and time created
	 * @return Response
	 */
    public function index()
    {
    	$orders = Order::orderBy('status_code_id')->orderBy('created_at', 'asc')->paginate(self::PAGINATION_SIZE);

    	return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
    	return view('admin.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $statusCodes = StatusCode::where('id', '!=', 1)->lists('name', 'id');

    	return view('admin.orders.edit', compact('statusCodes', 'order'));
    }

    public function update(EditOrderRequest $request, Order $order)
    {
        $order->status_code_id = $request->get('status_code_id');
        $order->save();

        $request->session()->flash('status', 'Order status has been updated.');

        return redirect()->route('AdminOrderShow', $order);
    }

    public function filter(FilterOrderRequest $request)
    {
        $query = $request->get('orderFilter');

        $orders = Order::where('status_code_id', $query)->orderBy('created_at', 'asc')->paginate(self::PAGINATION_SIZE);

        return view('admin.orders.index', compact('orders'));
    }
}

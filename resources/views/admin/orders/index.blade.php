@extends('admin.master', ['title' => 'Admin panel - Orders'])

@section('content')

<div class="categories">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Customer</th>
				<th>Order status</th>
				<th>Date</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $order)
			<tr data-href="{{ route('AdminOrderShow', $order) }}">
				<td>{{ $order->id }}</td>
				<td>#{{ $order->user->id }}, {{ $order->user->name }}</td>
				<td>{{ $order->status_code->name }}</td>
				<td>{{ $order->created_at->format('d.m.Y.  H:i:s') }}</td>
				<td>${{ $order->full_price }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{!! $orders->render() !!}

@endsection
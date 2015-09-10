@extends('admin.master', ['title' => 'Customer #' . $customer->id])

@section('content')
<div class="col-sm-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Customer #{{ $customer->id }}</h3>
		</div>
		<div class="panel-body">
			<div class="category-info">
				<h3>Customer information</h3>
				<dl class="dl-horizontal">
					<dt>ID & Name</dt>
					<dd>#{{ $customer->id }}, {{ $customer->name }}</dd>

					<dt>Email</dt>
					<dd>{{ $customer->email }}</dd>

					<dt>Registration date</dt>
					<dd>{{ $customer->created_at->format('d.m.Y.  H:i:s e') }}</dd>

					<dt>Activated</dt>
					<dd>{{ $customer->activated }}</dd>

					<dt>Adddress</dt>
					<dd>{{ $customer->address->name }}</dd>
					<dd>{{ $customer->address->street }}</dd>
					<dd>{{ $customer->address->ZIP . ' ' . $customer->address->city }}</dd>
					<dd>{{ $customer->address->country->name }}{{ $customer->address->state_id ? ', ' . $customer->address->state->name : '' }}</dd>

				</dl>
			</div>
			
			<ul class="list-group">
				<?php
					$orders = $customer->orders()->paginate(10);
				?>
				@foreach($orders as $order)
				<li class="list-group-item">
					<a class="inherit" href="{{ route('AdminOrderShow', $order) }}" target="_blank">
						Order #{{ $order->id }}, ${{ $order->full_price }}, {{ $order->status_code->name }}, {{ $order->created_at->toFormattedDateString() }}
					</a>
				</li>
				@endforeach
			</ul>
			{!! $orders->render() !!}
		</div>
	</div>
</div>

@endsection
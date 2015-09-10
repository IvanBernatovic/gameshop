@extends('store.primary-master')

@section('content')

<div class="panel panel-brand">
	<div class="panel-heading"><h3 class="panel-title">Profile - {{ $user->name }}</h3></div>
	<div class="panel-body">
		<div class="page-header">
			<h1>Orders</h1>
		</div>
		<ul class="list-group">
			<?php
			$orders = $user->orders()->paginate(20);
			?>
			@foreach($orders as $order)
			<li class="list-group-item">
				<a class="inherit" href="{{ route('StoreUserOrderShow', $order) }}">
					Order #{{ $order->id }}, ${{ $order->full_price }}, {{ $order->status_code->name }}, {{ $order->created_at->toFormattedDateString() }}
				</a>
			</li>
			@endforeach
		</ul>
		{!! $orders->render() !!}
	</div>
</div>

@endsection
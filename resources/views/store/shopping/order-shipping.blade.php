@extends('store.master', ['title' => 'Order'])

@section('main')

<div class="panel panel-brand">
	<div class="panel-heading"><h3 class="panel-title text-center">Product(s)</h3></div>
	<div class="panel-body white-section">
		<ul class="list-group">
			@foreach($cart->content() as $product)
			<li class="list-group-item">{{ $product->name }}, x{{ $product->qty }}, ${{ $product->price * $product->qty }} </li>
			@endforeach
			@if( Cart::total() < 150)
			<li class="list-group-item">Shipping (if order is under $150), $15</li>
			@endif
		</ul>
	</div>
	<div class="panel-footer clearfix">
		<span class="total-price"><strong>Total: ${{ Cart::total() }}</strong></span>
	</div>
	<form action="" method="POST">
		<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="pk_test_Z1xHfrj7X6ngwa8MhtnB97TD"
		data-amount="{{ $cart->totalWithShipping() * 100}}"
		data-name="Gameshop"
		data-description="{{ $cart->count() }} product(s) - ${{ $cart->totalWithShipping() }}"
		data-image="{{ asset('favicon.png') }}"
		data-locale="auto">
	</script>
</form>
</div>

<div class="panel panel-brand">
	<div class="panel-heading"><h3 class="panel-title text-center">Choose shipping adress</h3></div>
	<div class="panel-body white-section">
		<div class="radio">
			<?php $user = Auth::user(); ?>
			<label>
				<input type="radio" id="yourAddress" name="shippingAddress" value="yourAddress" checked="checked">
				Choose your address 
				({{ $user->address->street }},
				{{ $user->address->city }},
				{{ $user->address->state ? $user->address->state->name . ', ': '' }}
				{{ $user->address->country->name }})
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" id="otherAddress" name="shippingAddress" value="otherAddress">
				Choose other address
			</label>
		</div>
		<form class="">
			
		</form>
	</div>
</div>

@endsection
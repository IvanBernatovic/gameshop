@extends('store.master', ['title' => 'Order - Shipping address'])

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
		<span class="total-price"><strong>Total: ${{ Cart::totalWithShipping() }}</strong></span>
	</div>
</div>

<div class="panel panel-brand">
	<div class="panel-heading"><h3 class="panel-title text-center">Choose shipping adress</h3></div>
	<div class="panel-body white-section">
		<form id="addressForm" action="{{ route('StoreOrderShipping') }}" method="POST" class="col-md-8">
			{!! csrf_field() !!}
			<div class="radio">
				<?php $user = Auth::user(); ?>
				<label>
					<input type="radio" id="yourAddress" name="shippingAddress" value="yourAddress" checked="checked">
					Choose your address 
					({{ $user->address->name }},
					{{ $user->address->street }},
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
			<div id="otherAddress" class="hide">
				<div class="form-group">
					{!! Form::label('name', 'Full name') !!}
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Full name']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('country_id', 'Country') !!}
					{!! Form::select('country_id', Countries::lists('name', 'id'), null, ['class' => 'form-control']) !!}
				</div>
				<div id="states" class="form-group hide">
					{!! Form::label('state_id', 'State') !!}
					{!! Form::select('state_id', States::lists('name', 'id'), null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('city', 'City') !!}
					{!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('street', 'Address (street and number)') !!}
					{!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('ZIP', 'ZIP (postal code)') !!}
					{!! Form::text('ZIP', null, ['class' => 'form-control', 'placeholder' => 'ZIP']) !!}
				</div>
			</div>
		</form>
	</div>
	@include('errors.list')
	<div class="panel-footer clearfix">
		<button form="addressForm" class="btn btn-success">Submit address and go to payment methods</button>
	</div>
</div>

@endsection
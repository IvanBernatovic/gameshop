@extends('store.master', ['title' => 'Checkout'])

@section('main')

<div class="panel panel-brand">
	<div class="panel-heading"><h3 class="panel-title text-center">Checkout</h3></div>
	<div class="panel-body white-seciont">
		<ul class="list-group">
			@foreach($cart->content() as $product)
			<li class="list-group-item">{{ $product->name }}, x{{ $product->qty }}, ${{ $product->price * $product->qty }} </li>
			@endforeach
		</ul>
	</div>
	<div class="panel-footer clearfix">
		<span class="total-price"><strong>Total: ${{ Cart::total() }}</strong></span>
		<span class="pull-right">
			<a href="{{ route('StoreCartCheckout') }}"><button class="btn btn-success">Proceed with order</button></a>
			<a href="{{ route('StoreClearCart') }}"><button class="btn btn-danger">Continue shopping</button></a>
		</span>
	</div>
</div>

@endsection
@extends('store.master', ['title' => $product->name])

@section('main')

<div class="panel panel-brand">
	@include('store.categories.category-panel-heading', ['category' => $product->category])
	<div class="panel-body product-section">
		<div class="col-sm-4 text-center">
			<img class="img-responsive" src="{{ asset($product->image_thumb) }}"/>
		</div>
		<div class="col-sm-6">
			<h3 class="product-title">{{ $product->name }} @if($product->new) <span class="label label-success">New</span> @endif</h3>
			<p class="product-description">{!! $product->description !!}</p>
			<h4 class="listing-price">@if($product->discounted_price)<span class="old-price">${{ $product->price }}</span> ${{ $product->discounted_price }} @else ${{ $product->price }} @endif</h4 class="listing-price">
			<button class="btn btn-lg add-cart-big"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to cart</button>
		</div>
	</div>
</div>

@endsection
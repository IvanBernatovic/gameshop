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
			<form id="form-{{ $product->id }}" action="{{ route('StoreAddToCart') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="product_id" value="{{ $product->id }}">
			</form>
			<button class="btn btn-lg add-cart-big" form="form-{{ $product->id }}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to cart</button>
		</div>
	</div>
</div>

@endsection
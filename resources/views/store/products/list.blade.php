@foreach($products as $product)
<div class="col-sm-3 product-wrapper">
	<div class="product">
		<h5 class="product-listing-title"><a class="product-link" href="{{ route('StoreProductShow', $product->slug) }}">{{ $product->name }}@if($product->new) <span class="label label-success">New</span> @endif</a></h5>
		<a href="{{ route('StoreProductShow', $product->slug) }}">
			<div class="product-img-wrapper" style="background: url({{ asset($product->image_thumb) }}) no-repeat center center; background-size:100% auto;"></div>
		</a>
		<h5 class="listing-price">@if($product->discounted_price)<span class="old-price">${{ $product->price }}</span> ${{ $product->discounted_price }} @else ${{ $product->price }} @endif</h5 class="listing-price">
		<form id="form-{{ $product->id }}" action="{{ route('StoreAddToCart') }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="product_id" value="{{ $product->id }}">
		</form>
		<button class="btn add-cart" form="form-{{ $product->id }}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to cart</button>
	</div>
</div>
@endforeach
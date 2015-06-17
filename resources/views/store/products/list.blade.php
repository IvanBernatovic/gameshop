@foreach($products as $product)
<div class="col-sm-3 product-wrapper">
	<div class="product">
		<h5 class="product-title">{{ $product->name }}</h5>
		<div class="product-img-wrapper" style="background: url({{$product->image_thumb}}) no-repeat center center; background-size:100% auto;"></div>
		<h5 class="listing-price">@if($product->discounted_price)<span class="old-price">${{ $product->price }}</span> ${{ $product->discounted_price }} @else ${{ $product->price }} @endif</h5 class="listing-price">
		<button class="btn add-cart">Add to cart</button>
	</div>
</div>
@endforeach
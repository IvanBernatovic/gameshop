@extends('admin.master', ['title' => 'Product - ' . $product->name])

@section('content')
<div class="col-sm-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<ol class="breadcrumb">
					@if($product->category)
					@foreach($product->category->getAncestorsAndSelf() as $parent)
					<li><a class ="a-bread" href="{{ route('AdminCategoryShow', $parent) }}">{{ $parent->name }}</a></li>
					@endforeach
					@endif
					<span> --- {{ $product->name }}</span>
				</ol>
			</h3>
		</div>
		<div class="panel-body">
			<div class="buttons">
				<a class="btn btn-default" href="{{ route('AdminProductEdit', $product->slug) }}" role="button">Edit product</a>
				<a class="btn btn-default" href="{{ route('AdminProductDelete', $product->slug) }}" role="button">Delete product</a>
				@if($product->active)
				<a class="btn btn-default" href="{{ route('StoreProductShow', $product->slug) }}" role="button" target="_blank">Store page</a>
				@endif
			</div>
			
			<div class="col-sm-6 product-info">
				<h3>Product information</h3>
				<dl class="dl-horizontal">
					<dt>Name</dt>
					<dd>{{ $product->name }}</dd>

					<dt>Slug</dt>
					<dd>{{ $product->slug }}</dd>

					<dt>Price</dt>
					<dd>${{ $product->price }}</dd>

					<dt>Discounted price</dt>
					<dd>${{ $product->discounted_price }}</dd>

					<dt>Description</dt>
					<dd>{{ $product->description }}</dd>

					<dt>Name</dt>
					<dd>{{ $product->name }}</dd>

					<dt>SKU</dt>
					<dd>{{ $product->sku }}</dd>

					<dt>Quantity</dt>
					<dd>{{ $product->quantity }}</dd>

					<dt>Weight (kg)</dt>
					<dd>{{ $product->weight }}</dd>

					<dt>Is active</dt>
					<dd>{{ $product->active }}</dd>
					
					<dt>Is new</dt>
					<dd>{{ $product->new }}</dd>
				</dl>
			</div>

			<div class="col-sm-5  col-sm-offset-1">
				<img class="img-responsive" src="{{ asset($product->image) }}"></img>
			</div>
		</div>
	</div>
</div>

@endsection
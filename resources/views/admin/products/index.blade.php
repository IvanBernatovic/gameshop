@extends('admin.master', ['title' => 'Admin panel - Products'])

@section('content')

<form class="form-inline" method="GET" action="{{ route('AdminProductSearch') }}">
	<div class="form-group">
		<input name="q" type="text" class="form-control" placeholder="Search...">
	</div>
	<button type="submit" class="btn btn-primary">Search</button>
</form>
<a class="btn btn-default btn-margin" href="{{ route('AdminProductCreate') }}" role="button">Create new product</a>

<div class="categories">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>SKU</th>
				<th>Slug</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Category slug</th>	
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr data-href="{{ route('AdminProductShow', $product->slug) }}">
				<td>{{ $product->id }}</td>
				<td>{{ $product->name }}</td>
				<td>{{ $product->sku }}</td>
				<td>{{ $product->slug }}</td>
				<td>${{ $product->price }}</td>
				<td>{{ $product->quantity }}</td>
				<td>@if($product->category) {{ $product->category->slug }} @endif</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{!! $products->render() !!}

@endsection
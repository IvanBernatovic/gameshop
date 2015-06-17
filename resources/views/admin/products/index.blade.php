@extends('admin.master', ['title' => 'Admin panel - Products'])

@section('content')

<a class="btn btn-default" href="{{ route('AdminProductCreate') }}" role="button">Create new product</a>

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
			<tr data-href="{{ route('AdminProductShow', $product->id) }}">
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
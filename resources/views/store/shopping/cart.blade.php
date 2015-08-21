@extends('store.master', ['title' => 'Cart'])

@section('main')

<div class="panel panel-brand">
	<div class="panel-heading"><h3 class="panel-title text-center">Cart</h3></div>
	<table class="cart-content text-center">
		<thead>
			<tr>
				<th class="text-center">Name</th>
				<th class="text-center">Price</th>
				<th class="text-center">Quantity</th>
				<th class="text-center">Remove</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cart->content() as $product)
			<tr>
				<td><a class="inherit" href="{{ route('StoreProductShow', App\Models\Product::findOrFail($product->id)->slug) }}">{{ $product->name }}</a></td>
				<td>${{ $product->price }}</td>
				<td>{{ $product->qty }}</td>
				<td>
					<form id="form-{{ $product->id }}" action="{{ route('StoreRemoveFromCart') }}" method="POST">
						{!! csrf_field() !!}
						<input type="hidden" name="rowId" value="{{ $product->rowid }}">
					</form>
					<button type="submit" class="btn btn-default" form="form-{{ $product->id }}" aria-label="Remove product">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="panel-footer clearfix">
		<span class="total-price"><strong>Total: ${{ Cart::total() }}</strong></span>
		<span class="pull-right">
			<button class="btn btn-success">Proceed to checkout</button>
			<a href="{{ route('StoreClearCart') }}"><button class="btn btn-danger">Clear cart</button></a>
		</span>
	</div>
</div>

@endsection
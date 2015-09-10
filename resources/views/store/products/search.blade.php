@extends('store.master')

@section('main')

<div class="panel panel-brand">
	<div class="panel-heading text-center">
		<h3 class="panel-title">Search results</h3>
	</div>
	<div class="panel-body">
		@if(! $products->count())
		<p>No results</p>
		@else
		@include('store.products.list')
		@endif
	</div>
</div>

@endsection
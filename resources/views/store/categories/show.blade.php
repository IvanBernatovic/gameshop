@extends('store.master')

@section('main')

<div class="panel panel-brand">
	@include('store.categories.category-panel-heading')
	<div class="panel-body">
		@include('store.products.list')
	</div>
</div>

@endsection
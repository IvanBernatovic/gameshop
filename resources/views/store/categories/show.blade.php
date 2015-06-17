@extends('store.master')

@section('main')

<div class="panel panel-brand">
	<div class="panel-heading">
		<h3 class="panel-title">
			<ol class="breadcrumb">
				@foreach($category->getAncestorsAndSelf() as $parent)
				<li><a class ="a-bread" 
					@if($parent->isLeaf()) href="{{ route('StoreCategoryShow', $parent->slug) }}"
					@else href="#"
					@endif >{{ $parent->name }}</a></li>
				@endforeach
			</ol>
		</h3>
	</div>
	<div class="panel-body">
		@include('store.products.list')
	</div>
</div>

@endsection
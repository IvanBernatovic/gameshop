@extends('admin.master', ['title' => 'Admin panel - Create new product'])

@section('content')
<div class="col-sm-6">
	<div class="form">
		{!! Form::open(['method' => 'POST', 'url'=> route('AdminProductStore'), 'files' => true]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('category_id', 'Category:') !!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('image', 'Image:') !!}
			{!! Form::file('image', ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('price', 'Price ($):') !!}
			{!! Form::text('price', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('slug', 'Slug:') !!}
			{!! Form::text('slug', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('sku', 'SKU:') !!}
			{!! Form::text('sku', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('quantity', 'Quantity (integer):') !!}
			{!! Form::text('quantity', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('weight', 'Weight (kg):') !!}
			{!! Form::text('weight', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('active', 'Is active:') !!}
			{!! Form::checkbox('active', '1' ) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Create product',  ['class' => 'btn btn-primary form-control']) !!}
		</div>
		{!! Form::close() !!}
	</div>
	@include('errors.list')
</div>

@endsection
@extends('admin.master', ['title' => 'Edit category'])

@section('content')
<div class="col-sm-8">
	<div class="form">
		{!! Form::model($category, ['method' => 'PATCH', 'url'=> route('AdminCategoryUpdate', $category->id)]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('parent_id', 'Parent Category:') !!}
			{!! Form::select('parent_id', $categories, null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('slug', 'Slug:') !!}
			{!! Form::text('slug', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update category',  ['class' => 'btn btn-primary form-control']) !!}
		</div>
		{!! Form::close() !!}
	</div>
	@include('errors.list')
</div>

@endsection
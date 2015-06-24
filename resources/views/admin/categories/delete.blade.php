@extends('admin.master', ['title' => 'Are you sure?'])

@section('content')
<div class="col-sm-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<ol class="breadcrumb">
					@foreach($category->getAncestorsAndSelf() as $parent)
					<li><a class ="a-bread" href="{{ route('AdminCategoryShow', $parent) }}">{{ $parent->name }}</a></li>
					@endforeach
				</ol>
			</h3>
		</div>
		<div class="panel-body">
			<div class="alert alert-danger" role="alert">Are you sure you want to delete this category? Products in this category won't have category anymore.</div>
			{!! Form::model($category, ['method' => 'DELETE', 'url' => route('AdminCategoryDestroy', $category->slug)]) !!}
			{!! Form::submit('Yes, delete category', ['class' => 'btn btn-danger']) !!}
			<a class="btn btn-default" href="{{ route('AdminCategoryShow', $category->slug) }}" role="button">No, go back</a>
			{!! Form::close() !!}

		</div>
	</div>
</div>

@endsection
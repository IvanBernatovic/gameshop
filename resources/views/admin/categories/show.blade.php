@extends('admin.master', ['title' => 'Category'])

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
			<div class="buttons">
				<a class="btn btn-default" href="{{ route('AdminCategoryEdit', $category->id) }}" role="button">Edit category</a>
				<a class="btn btn-default" href="{{ route('AdminCategoryDelete', $category->id) }}" role="button">Delete category</a>
			</div>
			<div class="child-categories">
				<h3>Child Categories</h3>
				@if($category->getImmediateDescendants()->isEmpty())
				<p>There is no child categories.</p>
				@else
				<ul>
					@foreach($category->getImmediateDescendants() as $child)
					<li><a href="{{ route('AdminCategoryShow', $child) }}">{{ $child->name }}</a></li>
					@endforeach
				</ul>
				@endif
			</div>
			<div class="category-info">
				<h3>Category information</h3>
				<dl class="dl-horizontal">
					<dt>Name</dt>
					<dd>{{ $category->name }}</dd>

					<dt>Slug</dt>
					<dd>{{ $category->slug }}</dd>

					<dt>No. of products</dt>
					<dd>Derka derka muhamed jihad</dd>
				</dl>
			</div>
		</div>
	</div>
</div>

@endsection
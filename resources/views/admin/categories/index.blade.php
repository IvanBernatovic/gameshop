@extends('admin.master', ['title' => 'Admin panel - Categories'])

@section('content')

<a class="btn btn-default" href="{{ route('AdminCategoryCreate') }}" role="button">Create new category</a>

<div class="categories">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Slug</th>
				<th>Parent</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr data-href="{{ route('AdminCategoryCreate') }}">
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ $category->slug }}</td>
				<td>{{ $category->parent_id }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection
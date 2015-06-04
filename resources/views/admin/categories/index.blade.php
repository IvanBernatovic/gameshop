@extends('admin.master', ['title' => 'Admin panel - Categories'])

@section('content')

<a class="btn btn-default" href="{{ route('AdminCategoryCreate') }}" role="button">Create new category</a>

@endsection
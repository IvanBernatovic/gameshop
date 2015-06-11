@extends('store.primary-master')

@section('content')
<div class="col-sm-2">
	@include('store.side-navigation')
</div>

<div class="col-sm-10">
	@yield('main')
</div>

@endsection
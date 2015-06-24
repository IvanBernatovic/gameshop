@extends('store.primary-master')

@section('content')
<div class="col-sm-12 col-md-2 col-lg-2">
	@include('store.side-navigation')
</div>

<div class="col-sm-12 col-md-10 col-lg-10">
	
	@yield('main')

</div>

@endsection
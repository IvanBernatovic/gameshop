@extends('store.primary-master')

@section('content')
<div class="col-sm-12 col-md-2 col-lg-2">
	@include('store.side-navigation')
</div>

<div class="col-sm-12 col-md-10 col-lg-10">
	@if(Session::has('status'))
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ Session::get('status') }}
	</div>
	@endif
	@yield('main')

</div>

@endsection
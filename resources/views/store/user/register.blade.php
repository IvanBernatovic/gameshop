@extends('store.primary-master', ['title' => 'Register'])

@section('content')

{!! Form::open(['method' => 'POST', 'url'=> route('StoreUserRegisterPost'), 'class' => 'register-form']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Full name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Full name', 'required' => 'null']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email:') !!}
		{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'null']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Password') !!}
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'null']) !!}
	</div>

	{!! Form::submit('Register',  ['class' => 'btn-sign-in']) !!}
{!! Form::close() !!}

@include('errors.list')

@endsection
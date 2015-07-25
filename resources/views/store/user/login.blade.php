@extends('store.primary-master', ['title' => 'Sign in'])

@section('content')

{!! Form::open(['method' => 'POST', 'url'=> route('StoreUserLoginPost'), 'class' => 'form-signin']) !!}
	<h2 class="form-signin-heading">Please sign in</h2>
	{!! Form::label('email', 'Email address', ['class' => 'sr-only']) !!}
	{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Email adress", 'required' => 'null', 'autofocus' => null]) !!}
	
	{!! Form::label('password', 'Password', ['class' => 'sr-only']) !!}
	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'null']) !!}
	
	<div class="checkbox">
		<label>
			{!! Form::checkbox('remember-me', 'remember-me') !!} Remember me
		</label>
	</div>

	{!! Form::submit('Sign in',  ['class' => 'btn-sign-in']) !!}
{!! Form::close() !!}

@include('errors.list')

@endsection
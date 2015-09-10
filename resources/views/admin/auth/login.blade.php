@extends('admin.primary-master', ['title' => 'Sign in'])

@section('main')

@if(session('flag'))
@include('admin.auth.loginMessage')
@endif

{!! Form::open(['method' => 'POST', 'url' => route('AdminLoginPost'), 'class' => 'form-signin']) !!}
	<h2 class="form-signin-heading">Please sign in</h2>
	{!! Form::label('email', 'Email address', ['class' => 'sr-only']) !!}
	{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Email adress", 'required' => 'null', 'autofocus' => null]) !!}
	
	{!! Form::label('password', 'Password', ['class' => 'sr-only']) !!}
	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'null']) !!}
	
	<div class="checkbox">
		<label>
			{!! Form::checkbox('remember', 'remember') !!} Remember me
		</label>
	</div>

	{!! Form::submit('Sign in',  ['class' => 'btn btn-primary btn-lg']) !!}
{!! Form::close() !!}

@include('errors.list')

@endsection
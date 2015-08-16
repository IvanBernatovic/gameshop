@extends('store.primary-master', ['title' => 'Register'])

@section('content')

{!! Form::open(['method' => 'POST', 'url'=> route('StoreUserRegisterPost'), 'class' => 'register-form']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Full name') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Full name', 'required' => 'null']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'null']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Password') !!}
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'null']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('repeat_password', 'Repeat password') !!}
		{!! Form::password('repeat_password', ['class' => 'form-control', 'placeholder' => 'Repeat password', 'required' => 'null']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('country', 'Country') !!}
		{!! Form::select('country', Countries::lists('name', 'id'), null, ['class' => 'form-control']) !!}
	</div>
	<div id="states" class="form-group hide">
		{!! Form::label('state', 'State') !!}
		{!! Form::select('state', States::lists('name', 'id'), null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('city', 'City') !!}
		{!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City', 'required' => 'null']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('address', 'Address (street and number)') !!}
		{!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address', 'required' => 'null']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('ZIP', 'ZIP (postal code)') !!}
		{!! Form::text('ZIP', null, ['class' => 'form-control', 'placeholder' => 'ZIP', 'required' => 'null']) !!}
	</div>

	{!! Form::submit('Register',  ['class' => 'btn-sign-in']) !!}
{!! Form::close() !!}

@include('errors.list')

@endsection
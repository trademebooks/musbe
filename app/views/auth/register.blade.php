@extends('layouts.sessions.register')

@section('content')

<div class="centered custom-background-alpha">

	<br>

	<h2> Create an Account </h2>

	<br>

	<form action="" method="post">

		<input class="log-reg-input-width" type="text" name="username" placeholder="Username" size="35" {{ Input::old('username') ? 'value="' . e(Input::old('username')) . '"' : '' }}>
		<br>
		{{ $errors->first('username', '<span class="error">:message</span>') }}
		<br>

		<input class="log-reg-input-width" type="text" name="email" placeholder="Email" size="35" {{ Input::old('email') ? 'value="' . e(Input::old('email')) . '"' : '' }}>
		<br>
		{{ $errors->first('email', '<span class="error">:message</span>') }}
		<br>

		<input class="log-reg-input-width" type="password" name="password" placeholder="Password" size="35" {{ Input::old('password') ? 'value="' . e(Input::old('password')) . '"' : '' }}>
		<br>
		{{ $errors->first('password', '<span class="error">:message</span>') }}
		<br>

		<input class="log-reg-input-width" type="password" name="password_again" placeholder="Confirm Password" size="35" {{ Input::old('password') ? 'value="' . e(Input::old('password')) . '"' : '' }}>
		<br>
		{{ $errors->first('password_again', '<span class="error">:message</span>') }}
		<br>

		<input class="custom-button-alpha background-color-maroon" type="submit" value="Register">

		{{ Form::token() }}
	</form>

</div>

@stop
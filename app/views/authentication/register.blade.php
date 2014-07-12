@extends('layouts.register')

@section('content')

<div class="centered">
	Create an Account
	<br><br>

	<form action="" method="post">
		
		<input type="text" name="email" placeholder="Email" size="35">
		<br>
		{{ $errors->first('username', '<span class="error">:message</span>') }}
		<br><br>

		<input type="password" name="password" placeholder="Password" size="35">
		<br>
		{{ $errors->first('password', '<span class="error">:message</span>') }}
		<br><br>

		<input type="password" name="password_again" placehold="Confirm Password" size="35">
		<br>
		{{ $errors->first('password_again', '<span class="error">:message</span>') }}
		<br><br>

		<input type="submit" value="Register">

		{{ Form::token() }}
	</form>


	<hr>

	<a href="#"> Connect with Facebook </a>
</div>

@stop
@extends('layouts.login')

@section('content')

<div class="centered">
	Login
	<br><br>

	<form action="" method="post">

		<input type="text" name="email" placeholder="Email" size="35">
		<br>
		{{ $errors->first('email', '<span class="error">:message</span>') }}
		<br><br>

		<input type="password" name="password" placeholder="Password" size="35">
		<br>
		{{ $errors->first('password', '<span class="error">:message</span>') }}
		<br><br>

		<input type="submit" value="Login">

		{{ Form::token() }}
	</form>
</div>

@stop
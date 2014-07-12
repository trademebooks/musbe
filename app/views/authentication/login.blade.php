@extends('layouts.register')

@section('content')

<div class="centered">
	Login
	<br><br>

	<form action="" method="post">

		<input type="text" name="email" placeholder="Email" size="35">
		<br><br>

		<input type="password" name="password" placeholder="Password" size="35">
		<br><br>

		<input type="submit" value="Login">

		{{ Form::token() }}
	</form>
</div>

@stop
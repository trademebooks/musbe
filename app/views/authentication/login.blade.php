@extends('layouts.register')

@section('content')

Login
<form action="" method="post">
	email
	<br>
	<input type="password" name="email">
	<br><br>
	password
	<br>
	<input type="password" name="password">
	<input type="submit">

	{{ Form::token() }}
</form>

@stop
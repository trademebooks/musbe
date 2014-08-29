@extends('layouts.sessions.login')

@section('content')

    <div class="centered custom-background-alpha">

        <br>

        @include('flash::message')

        <h2> Login </h2>

        <br>

        <form action="" method="post">

            <input class="log-reg-input-width" type="text" name="email" placeholder="Email" size="35">
            <br>
            {{ $errors->first('email', '<span class="error">:message</span>') }}
            <br>

            <input class="log-reg-input-width" type="password" name="password" placeholder="Password" size="35">
            <br>
            {{ $errors->first('password', '<span class="error">:message</span>') }}
            <br>

            <input class="custom-button-alpha background-color-maroon" type="submit" value="Login">

            <br><br>

            <div>
                <a href="{{ url('/password/remind') }}"> Forgot Password </a>
            </div>
            {{ Form::token() }}
        </form>

    </div>

@stop
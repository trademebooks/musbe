@extends('layouts.sessions.password_reset')

@section('content')

    <div class="centered custom-background-alpha">

        <br><br>

        <h2> New Password </h2>

        {{ Form::open() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <br>

            <input class="log-reg-input-width" type="email" name="email" placeholder="Email" size="35">

            <br><br>

            <input class="log-reg-input-width" type="password" name="password" placeholder="New Password" size="35">

            <br><br>

            <input class="log-reg-input-width" type="password" name="password_confirmation" placeholder="New Password Again" size="35">

            <br><br>

            <input class="custom-button-alpha background-color-maroon" type="submit" value="Reset">

            <br><br>

            {{ Form::token() }}

        {{ Form::close() }}

        @if (Session::has('error'))
            <p style="color: red;">{{ Session::get('error') }}</p>
        @endif

    </div>

@stop
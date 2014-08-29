@extends('layouts.sessions.login')

@section('content')

    <div class="centered custom-background-alpha">

        <br><br>

        <h2> Password Reset </h2>

        {{ Form::open() }}

            <br>

            <input class="log-reg-input-width" type="email" name="email" placeholder="Email" size="35">

            <br><br>

            <input class="custom-button-alpha background-color-maroon" type="submit" value="Reset">

            <br><br>

            {{ Form::token() }}

        {{ Form::close() }}

        @if (Session::has('error'))
            <p style="color: red;">{{ Session::get('error') }}</p>
        @elseif (Session::has('status'))
            <p>{{ Session::get('status') }}</p>
        @endif

    </div>

@stop
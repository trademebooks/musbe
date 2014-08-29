@extends('layouts.pages.add_post')

{{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
{{ HTML::style('custom_files/css/custom.css') }}

@section('content')

    <h1> I want to Sell: </h1>

    <br>
    
    <div class="row">

        <div class="col-md-3">
            <a href="{{ URL::route('books.create') }}">
                <img src="{{ asset('custom_files/images/textbook_icon.png') }}" height="200" width="200">
            </a>
        </div>
        <div class="col-md-3">
            <a href="">
                <img src="{{ asset('custom_files/images/notes_icon.png') }}" height="200" width="200">
            </a>
        </div>

        <div class="col-md-3">
            <a href=""><img src="{{ asset('custom_files/images/iclicker_icon.png') }}" height="200" width="200"></a>
        </div>

        <div class="col-md-3">
            <a href=""><img src="{{ asset('custom_files/images/bundles_icon.png') }}" height="200" width="200"></a>
        </div>
    </div>

@stop

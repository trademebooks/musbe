@extends('layouts.post_create')

{{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
{{ HTML::style('custom_files/css/custom.css') }}

@section('content')

    {{ Form::open(['method' => 'PATCH', 'route' => ['books.update', $book->id]]) }}

        <!-- Step 1 -->
        <div class="row background-color-gray">
            <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 1 </span>
            <span id="instructions" class="padding10 font-size-em-12"> Book Information </span>
        </div>

        <div class="row">

            <h4 class="font-color-maroon"> Text Book Information </h4>

            <div class="col-md-3">
                Book Name*
                <br>
                <input name="title" type="text" placeholder="(ex. Advanced Calculus 2 for Dummies)" size="40" {{ Input::old('title') ? 'value="' . e(Input::old('title')) . '"' : 'value="' . $book->title . '"' }}>
                {{ $errors->first('title', '<span class="font-color-maroon error"> :message </span>') }}
                <br><br>
                Book Edition
                <br>
                <span class="custom-font-alpha"> Leaving it blank will result in "None" </span>
                <br>
                <input type="text" name="edition" placeholder="(ex. 2)" {{ Input::old('edition') ? 'value="' . e(Input::old('edition')) . '"' : 'value="' . $book->edition . '"' }}>
                <br>
                {{ $errors->first('edition', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

            <div class="col-md-3">
                Author*
                <br>
                <input name="author" type="text" placeholder="(ex. John Smith)" size="40" {{ Input::old('author') ? 'value="' . e(Input::old('author')) . '"' : 'value="' . $book->author . '"' }}>
                <br>
                {{ $errors->first('author', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

            <div class="col-md-3">
                Course Name*
                <br>
                <input name="course_name" type="text" placeholder="(ex. Advanced Calculus 2)" size="40" {{ Input::old('course_name') ? 'value="' . e(Input::old('course_name')) . '"' : 'value="' . $book->course_name . '"' }}>
                <br>
                {{ $errors->first('course_name', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

            <div class="col-md-3">
                Course code*
                <br>
                <input name="course_code" type="text" placeholder="(ex. MAT 100)" size="20" {{ Input::old('course_code') ? 'value="' . e(Input::old('course_code')) . '"' : 'value="' . $book->course_code . '"' }}>
                <br>
                {{ $errors->first('course_code', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

        </div>

        <br><br>

        <!-- Step 2 -->
        <div class="row background-color-gray">
            <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 2 </span>
            <span id="instructions" class="padding10 font-size-em-12"> Description of the Book - <b> Optional </b> </span>
        </div>

        <div class="row">

            <h4 class="font-color-maroon"> Description and Additional Information </h4>

            <div class="col-md-4">
                <textarea name="description" cols="80" rows="10" placeholder="(ex. This is a mint condition book. I bought it and never used it. Call me for price.")>{{ Input::old('description') ? e(Input::old('description')) : $book->description }}</textarea>
            </div>

        </div>

        <br><br>

        <!-- Step 3 -->
        <div class="row background-color-gray">
            <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 3 </span>
            <span id="instructions" class="padding10 font-size-em-12"> Pricing </span>
        </div>

        <div class="row">

            <h4 class="font-color-maroon"> Price of the Book </h4>

            <div class="col-md-4">
                <span class="custom-font-alpha"> Leaving it blank will result in "Please Contact" </span>
                <br>
                <input type="text" name="price" placeholder="(ex. 500)" {{ Input::old('price') ? 'value="' . e(Input::old('price')) . '"' : 'value="' . $book->price . '"' }}>
                <br>
                {{ $errors->first('price', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

        </div>

        <br><br>

        <!-- Step 4 -->
        <div class="row background-color-gray">
            <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 4 </span>
            <span id="instructions" class="padding10 font-size-em-12"> Contact Information </span>
        </div>

        <div class="row">

            <h4 class="font-color-maroon"> Contact Information </h4>

            <div class="col-md-4">
                Email*
                <br>
                <input type="text" name="email" placeholder="(ex. johnsmith@hotmail.com)" size="40" {{ Input::old('email') ? 'value="' . e(Input::old('email')) . '"' : 'value="' . $book->email . '"' }}>
                <br>
                {{ $errors->first('email', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

            <div class="col-md-4">
                Cell Number*
                <br>
                <input type="text" name="phone_number" placeholder="(ex. 416-123-1234)" {{ Input::old('phone_number') ? 'value="' . e(Input::old('phone_number')) . '"' : 'value="' . $book->phone_number . '"' }}>
                <br>
                {{ $errors->first('phone_number', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

        </div>

        <br>

        <!-- Submit Button -->
        <hr>

        <div class="row">
            <div class="col-md-4">
                <input class="btn btn-danger" type="submit"  value="Submit!">
            </div>
        </div>

        <br>

    {{ Form::close() }}

@stop

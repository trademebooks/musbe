@extends('layouts.books.create_book')

{{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
{{ HTML::style('custom_files/css/custom.css') }}

@section('content')

    <form action="{{ URL::route('books.store') }}" method="post">

        <!-- Step 1 -->
        <div class="row background-color-gray">
            <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 1 </span>
            <span id="instructions" class="padding10 font-size-em-12"> Book Information - <b> * Required </b> </span>
        </div>

        <div class="row">

            <h4 class="font-color-maroon"> Textbook and Course Information </h4>

            <div class="col-md-3">
                Book Name*
                <br>
                <input name="title" type="text" placeholder="(ex. Advanced Calculus 2 for Dummies)" size="40" {{ Input::old('title') ? 'value="' . e(Input::old('title')) . '"' : '' }}>
                {{ $errors->first('title', '<span class="font-color-maroon error"> :message </span>') }}
                <br><br>
                Book Edition
                <br>
                <span class="custom-font-alpha"> Leaving it blank will result in "None" </span>
                <br>
                <input type="text" name="edition" placeholder="(ex. 2)" {{ Input::old('edition') ? 'value="' . e(Input::old('edition')) . '"' : '' }}>
                <br>
                {{ $errors->first('edition', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

            <div class="col-md-3">
                Author*
                <br>
                <input name="author" type="text" placeholder="(ex. John Smith)" size="40" {{ Input::old('author') ? 'value="' . e(Input::old('author')) . '"' : '' }}>
                <br>
                {{ $errors->first('author', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

            <div class="col-md-3">
                Course Name*
                <br>
                <input name="course_name" type="text" placeholder="(ex. Advanced Calculus 2)" size="40" {{ Input::old('course_name') ? 'value="' . e(Input::old('course_name')) . '"' : '' }}>
                <br>
                {{ $errors->first('course_name', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

            <div class="col-md-3">
                Course Code*
                <br>
                <select name="course_code_prefix">
                    <option>  </option>
                    @foreach($course_codes as $course_code)
                        <option {{ Input::old('course_code_suffix') ? 'value="' . e(Input::old('course_code_suffix')) . '"' : 'value="' . $course_code->course_code . '"'}}> {{ $course_code->course_code }} </option>
                    @endforeach
                </select>
                <br>
                {{ $errors->first('course_code_prefix', '<span class="font-color-maroon error"> :message </span>') }}

                <br>
                <input name="course_code_suffix" type="text" maxlength="4" placeholder="(ex. 2B03)" size="9" {{ Input::old('course_code_suffix') ? 'value="' . e(Input::old('course_code_suffix')) . '"' : '' }}>
                <br>
                {{ $errors->first('course_code_suffix', '<span class="font-color-maroon error"> :message </span>') }}
            </div>
          </div>

        <br><br>

        <!-- Step 2 -->
        <div class="row background-color-gray">
            <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 2 </span>
            <span id="instructions" class="padding10 font-size-em-12"> Description of the Book - <b> Optional </b> </span>
        </div>

        <div class="row">

          <h4 class="font-color-maroon"> Description and Image Information </h4>

            <div class="col-md-6">
                Description
                <br>
                <span class="custom-font-alpha"> Note: There is a 400 character limit </span>
                <br>
                  <textarea name="description" cols="80" rows="10" maxlength="400" placeholder="(ex. This is a mint condition book. I bought it and never used it. Call me for price.")>{{ Input::old('description') ? e(Input::old('description')) : '' }}</textarea>
             </div>

            <div class="col-md-6">
                Image URL
                <br>
                <span class="custom-font-alpha"> Leaving it blank will result in a default image </span>
                <br>
                <input type="text" name="image" placeholder="(ex. http://goo.gl/d2fXqi)" size="30" {{ Input::old('image') ? 'value="' . e(Input::old('image')) . '"' : '' }}>
                <br>
                {{ $errors->first('image', '<span class="font-color-maroon error"> :message </span>') }}
            </div>
          </div>

        <br><br>

        <!-- Step 3 -->
        <div class="row background-color-gray">
            <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 3 </span>
            <span id="instructions" class="padding10 font-size-em-12"> Pricing - <b> * Required </b></span>
        </div>

        <div class="row">

            <h4 class="font-color-maroon"> Price of the Book </h4>

            <div class="col-md-4">
                Price*
                <br>
                <input type="text" name="price" placeholder="(ex. 500)" {{ Input::old('price') ? 'value="' . e(Input::old('price')) . '"' : '' }}>
                <br>
                {{ $errors->first('price', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

        </div>

        <br><br>

        <!-- Step 4 -->
        <div class="row background-color-gray">
            <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 4 </span>
            <span id="instructions" class="padding10 font-size-em-12"> Contact Information - <b> * Required </b></span>
        </div>

        <div class="row">

            <h4 class="font-color-maroon"> Email and Cell Phone Number </h4>

            <div class="col-md-4">
                Email*
                <br>
                <input type="text" name="email" placeholder="(ex. johnsmith@hotmail.com)" size="40" {{ Input::old('email') ? 'value="' . e(Input::old('email')) . '"' : 'value="' . Sentry::getUser()->email . '"' }}>
                <br>
                {{ $errors->first('email', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

            <div class="col-md-4">
                Cell Number
                <br>
                <input type="text" name="phone_number" placeholder="(ex. 416-123-1234)" {{ Input::old('phone_number') ? 'value="' . e(Input::old('phone_number')) . '"' : '' }}>
                <br>
                {{ $errors->first('phone_number', '<span class="font-color-maroon error"> :message </span>') }}
            </div>

        </div>

        <br>

        <!-- Submit Button -->
        <hr>

        <div class="row">
            <div class="col-lg-3 col-lg-offset-5">
                <input class="btn btn-default btn-lg background-color-gray" type="submit"  value="Submit!">
            </div>
        </div>

        <br>
        {{ Form::token() }}

    </form>

@stop

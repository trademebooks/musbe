@extends('layouts.books.create_book')

{{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
{{ HTML::style('custom_files/css/custom.css') }}

@section('content')

  <div class="row background-color-gray">
    <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 1 </span>
    <span id="instructions" class="padding10 font-size-em-12"> Item information - all fields required * </span>
  </div>

  <div class="row">

    <h4 class="font-color-maroon"> Text Book Item </h4>

    <div class="col-md-3">
      Textbook Name* 
      <br>
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="40">
      <br><br>
      Edition*
      <br>
      <span class="custom-font-alpha"> Select One </span> 
      <br>
      <input type="radio" name="sex" value="male"> <input type="text" placeholder="(ex. 5)">
      <br>
      <input type="radio" name="sex" value="female"> No Edition
    </div>

    <div class="col-md-3">
      Name of Author* 
      <br>
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="40">

      <br><br>
      Textbook with Solutions included?*
      <br>
      <span class="custom-font-alpha"> Select One </span> 
      <br>
      <input type="radio" name="sex" value="male"> Included
      <br>
      <input type="radio" name="sex" value="female"> Not Included
    </div>

    <div class="col-md-3">
      Course Name* 
      <br>
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="40">
    </div>

    <div class="col-md-3">
      Course code* <span class="custom-font-alpha"> enter up to 3 </span> 
      <br>
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="5">
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="5">
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="5">
    </div>

  </div>

  <hr>

  <div class="row">

    <h4 class="font-color-maroon"> COURSE MATERIAL ITEM(S) </h4>

    <div class="col-md-4">
      Material Name* 
      <br>
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="40">
    </div>

    <div class="col-md-4">
      Course Name* 
      <br>
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="40">
    </div>

    <div class="col-md-4">
      Course Code* 
      <br>
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="5">
    </div>

  </div>

  <hr>

  <div class="row">

    <h4 class="font-color-maroon"> MISCELLANEOUS ITEM(S) </h4>

    <div class="col-md-4">
      Material Name* 
      <br>
      <input type="text" placeholder="(ex. Advanced Calculus 2)" size="40">
    </div>
  </div>

  <br><br>

  <div class="row background-color-gray">
    <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 2 </span>
    <span id="instructions" class="padding10 font-size-em-12"> <b> Optional </b> Additional Buy Information </span>
  </div>

  <br>

  <div class="row">
    <div class="col-md-4">
      Additional Comments 
      <br><br>
      <textarea cols="80" rows="10"></textarea>
    </div>
  </div>

  <br>

  <div class="row background-color-gray">
    <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 3 </span>
    <span id="instructions" class="padding10 font-size-em-12"> Pricing - set a price you are willing to pay for the item(s) listed above </span>
  </div>

  <br>

  <div class="row">
    <div class="col-md-4">
      Select One
      <br>
      <input type="radio" name="sex" value="male"> <input type="text" placeholder="(ex. 5)">
      <br>
      <input type="radio" name="sex" value="female"> Please Contact
      </div>
  </div>

  <br>

  <div class="row background-color-gray">
    <span id="step" class="padding10 text-center font-color-white font-size-em-14"> Step 4 </span>
    <span id="instructions" class="padding10 font-size-em-12"> Contact Information </span>
  </div>

  <br>

  <div class="row">
    <div class="col-md-4">
      Required Email
      <br>
      <input type="text" name="sex" value="female">
    </div>
    <div class="col-md-4">
      Optional Cell Number
      <br>
      <input type="text" name="sex" value="female">
    </div>
  </div>

  <br>

  <hr>

  <div class="row">
    <div class="col-md-4">
      <button class="btn btn-default"> Preview </button>
      <button class="btn btn-danger"> Post </button>
    </div>
  </div>

  <br>
@stop

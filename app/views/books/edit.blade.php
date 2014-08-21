@extends('layouts.book_shelf')

{{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
{{ HTML::style('custom_files/css/custom.css') }}

@section('content')

	<h3> Manage Your Listings </h3>

	<h4> Active Seller Listings </h4>

	<hr>

	<br><br>

	<h4> Active Buyer Listings </h4>

	<div class="row">

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

	<h4> Accout Settings </h4>

	<br><br>
	
@stop

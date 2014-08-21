@extends('layouts.add_pos')

{{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
{{ HTML::style('custom_files/css/custom.css') }}

@section('content')

    <h1> I want to Sell: </h1>

    <div class="row">

        <div class="col-md-4">
            <a href="{{ URL::route('books.create') }}"> Books <img src="http://howtoblogabook.com/wp-content/uploads/2012/10/shopping-cart-with-books-dreamstime_xs_23300617.jpg" height="200" width="200"> </a>
        </div>
        <div class="col-md-4">
            <a href=""> IClickers <img src="http://it.unh.edu/media/at/atsc/productBig.png" height="200" width="200"> </a>
        </div>
        <div class="col-md-4">
            <a href=""> Course Materials <img src="http://www.mumsgone2aus.com/wp-content/uploads/2012/01/school-test.jpg" height="200" width="200"> </a>
        </div>

    </div>

@stop

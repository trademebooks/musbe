<!DOCTYPE html>
<html lang="en">

    <head>
        @include('partials/header')
    </head>

    <body>

    @include('partials/nav')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron jumbotron-home">

        <br><br>
        <br><br>

        <div class="container">

            <div id="heading">
            <h3> Welcome to </h3>
            <h1> McMaster Used Book Exchange </h1>
            <p> A place to buy & sell all your textbooks and course material </p>
            </div>

            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>

            {{ Form::open(['method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'form']) }}
                <span class="font-color-white font-size-em-30 font-weight-bold"> Find Sellers Now! </span>
                <div class="form-group">
                    {{ Form::input('search', 'q', null, ['placeholder' => 'Search for the title of a book .....', 'size' => '80', 'class' => 'form-control']) }}
                </div>
                {{ Form::submit('Search', ['class' => 'btn btn-success']) }}
            {{ Form::close() }}
        </div>
    </div>

    <div class="font-weight-bold font-size-em-20 background-color-gray text-center padding10">
        Check out What People are Selling.
    </div>

    <br><br>

    <div class="container"> <!-- container start -->

        @yield('content')

        @include('partials/footer')

    </div> <!-- container end -->

        @include('partials/scripts')

    </body>

</html>
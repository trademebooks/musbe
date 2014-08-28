<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body>

    @include('partials/nav')

    <div class="jumbotron jumbotron-bookshelf">

        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>

    </div>

    <div class="font-size-em-20 background-color-gray text-center padding10">
        Create a listing
    </div>

    <div class="container"> <!-- container start -->
        @yield('content')
    </div> <!-- container end -->

    @include('partials/scripts')

  </body>

</html>
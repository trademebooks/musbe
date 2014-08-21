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

    <div class="font-weight-bold font-size-em-20 background-color-gray text-center padding10">
        My Bookshelf
    </div>

    <br><br>

    <div class="container"> <!-- container start -->
        @yield('content')
    </div> <!-- container end -->

    @include('partials/scripts')

  </body>

</html>
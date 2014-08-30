<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body>

    @include('partials/nav')

    <div class="jumbotron jumbotron-post">

      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>

    </div>

    <div class="font-size-em-20 background-color-gray text-center padding10">
      About Us
    </div>

    <div class="container"> <!-- container start -->

      @yield('content')

      @include('partials/footer')

    </div> <!-- container end -->

    @include('partials/scripts')

  </body>

</html>
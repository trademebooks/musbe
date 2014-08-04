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

    <br><br>
    
    <div class="container"> <!-- container start -->

      @yield('content')

      @include('partials/footer')

    </div> <!-- container end -->

    @include('partials/scripts')
    
  </body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body>
    
    <div class="container"> <!-- container start -->

      @yield('content')
      404 page
    </div> <!-- container end -->

    @include('partials/scripts')
    
  </body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body class="background-register">

    @include('partials/nav')

    <div class="container"> <!-- container start -->

      <div class="row"> <!-- row start -->

      <div class="col-lg-12 text-center"> <!-- row1 colum1 start -->
        @yield('content')
      </div> <!-- row1 colum1 end -->

      </div> <!-- row end -->

    </div> <!-- container end -->

    @include('partials/scripts')

  </body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body>

    @include('partials/nav')
    @include('partials/jumbotron')

    <div class="container"> <!-- container start -->

      <div class="row"> <!-- row start -->

          <div class="col-lg-10"> <!-- row1 colum1 start -->
            @yield('content')
          </div> <!-- row1 colum1 end -->

          <div class="col-lg-2"> <!-- row1 colum2 start -->
            @include('partials/sidebar')
          </div> <!-- row1 colum2 end -->

      </div> <!-- row end -->

    </div> <!-- container end -->

    @include('partials/footer')
    @include('partials/scripts')

  </body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body>

    @include('partials/nav')

    <div class="container"> <!-- container start -->

      <div class="row"> <!-- row start -->
            @yield('content')
      </div> <!-- row end -->

    </div> <!-- container end -->

    @include('partials/scripts')

  </body>

</html>
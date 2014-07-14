<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body>

    @include('partials/nav')
    @include('partials/jumbotron')

<center class="border">
  <div>
  People selling Textbooks
  </div>
</center>

<center class="border">
  <div>
 filter bar here
  </div>
</center>


<br><br>
    <div class="container"> <!-- container start -->

      <div class="row"> <!-- row start -->
          @yield('content')
      </div> <!-- row end -->

    </div> <!-- container end -->

    @include('partials/footer')
    @include('partials/scripts')

  </body>

</html>
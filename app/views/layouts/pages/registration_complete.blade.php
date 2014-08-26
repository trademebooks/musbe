<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials/header')
</head>

    <body class="background-registration-complete">

        @include('partials/nav')

            <div class="container"> <!-- container start -->

                @yield('content')

            </div> <!-- container end -->

        @include('partials/scripts')

    </body>

</html>
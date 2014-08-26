<div class="navbar navbar-fixed-top" role="navigation">

  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar background-color-gray"></span> <!-- black -->
        <span class="icon-bar background-color-gray"></span>
        <span class="icon-bar background-color-gray"></span>
        <span class="icon-bar background-color-gray"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}"><img id="logo" src="{{ asset('custom_files/images/logo.png') }}" alt="Musbe Logo" height="40" width="150"></a>
    </div>

    <div class="navbar-collapse navbar-custom collapse">
      <ul class="nav navbar-nav navbar-right">
          @if(Sentry::check())
            <li><a href="{{ URL::route('logout') }}"> Logout </a></li>
            <li><a href="{{ URL::route('books.index') }}"> My Bookshelf </a></li>
            <li><a href="{{ URL::route('add_post') }}" class="btn btn-default btn-lg" role="button"> Post an Ad </a></li>
          @else
            <li><a href="{{ URL::route('login') }}"> Login </a></li>
            <li><a href="{{ URL::route('register') }}"> Register </a></li>
          @endif
      </ul>
    </div>

  </div>

</div>

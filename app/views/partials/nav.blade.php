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
      <a class="navbar-brand" href="{{ URL::route('home') }}"><img id="logo" src="custom_files/images/logo.png" alt="Musbe Logo" height="40" width="150"></a>
    </div>

    <div class="navbar-collapse navbar-custom collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::route('login') }}"> Login </a></li>
        <li><a href="{{ URL::route('register') }}"> Register </a></li>
        <li><a href="{{ URL::route('posts.edit') }}"> My Bookshelf </a></li>
        <li><a href="{{ URL::route('posts.create') }}" class="btn btn-default btn-lg" role="button"> Post an Ad </a></li>
      </ul>
    </div>

  </div>

</div>

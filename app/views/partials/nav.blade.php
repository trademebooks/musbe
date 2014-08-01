<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}"><img src="custom_files/images/logo.png" alt="Musbe Logo" height="40" width="150"></a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::route('login') }}"> Login </a></li>
        <li><a href="{{ URL::route('register') }}"> Register </a></li>
        <li><a href="{{ URL::route('posts.edit') }}"> My Bookshelf </a></li>
        <li><a href="{{ URL::route('posts.create') }}"> Post an Ad </a></li>
      </ul>
    </div>

  </div>

</div>

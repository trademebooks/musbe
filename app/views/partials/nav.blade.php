<!-- Fixed navbar -->
<div class="navbar navbar-fixed-top" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation1</span>
        <span class="icon-bar">Toggle navigation2</span>>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}"> Musbe </a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::route('login') }}"> Login </a></li>
        <li><a href="{{ URL::route('register') }}"> Register </a></li>
        <li><a href="{{ URL::route('posts.edit') }}"> My Bookshelf </a></li>
        <li><a href="{{ URL::route('posts.create') }}"> Post an Ad </a></li>
      </ul>
    </div><!--/.nav-collapse -->

</div>

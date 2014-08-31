<footer class="row background-color-maroon text-center padding10">

  <div class="col-md-2">
    MUSBE &copy; 2014
  </div>

  <div class="col-md-2">
    <a href="{{ route('terms') }}"> Terms of Service </a>
  </div>

  <div class="col-md-2">
    <a href="{{ route('about') }}"> About Us </a>
  </div>

  <div class="col-md-2">
    <a href="" data-toggle="modal" data-target="#contactModal"> Contact Us </a>
  </div>

  <div class="col-md-4">
    <a href="https://www.facebook.com/pages/McMaster-Used-Student-Book-Exchange-MUSBE/643109775797043?ref=hl"><img src="{{ asset(custom_files/images/social_media_icons/facebook.png) }}" class="social_media"></a>
    <a href="https://twitter.com/mcmusbe"><img src="{{ asset(custom_files/images/social_media_icons/twitter.png" class="social_media) }}"></a>
    <a href="https://plus.google.com/b/100895081310726584711/100895081310726584711/posts"><img src="{{ asset(custom_files/images/social_media_icons/google-plus.png" class="social_media) }}"></a>
    <!--
    <a href=""><img src="images/social_media_icons/linkedin.png" class="social_media"></a>
    <a href=""><img src="images/social_media_icons/youtube.png" class="social_media"></a>
    <a href=""><img src="images/social_media_icons/github.png" class="social_media"></a>
    -->
  </div>

</footer>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h1 class="text-center"> Contact Us </h1>
      </div>

      <div class="modal-body">

        <form role="form" action="{{ route('contact-me') }}" method="post">

          <div class="form-group">
            <label for="email"> Email: </label>
            <input class="form-control" name="email" type="text" >
          </div>

          <div class="form-group">
            <label for="subject"> Subject: </label>
            <input class="form-control" name="subject" type="text" >
          </div>

          <div class="form-group">
            <label for="seller"> Message: </label>
            <textarea name="body" class="form-control" rows="5"></textarea>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left background-color-gray" data-dismiss="modal"> Back </button>
            <button type="submit" class="btn btn-danger pull-right background-color-maroon"> Submit </button>
          </div>

          {{ Form::token() }}

        </form>

      </div>

    </div>

  </div>

</div>
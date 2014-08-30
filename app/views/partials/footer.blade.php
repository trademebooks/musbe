<footer class="row background-color-maroon text-center padding10">

  <div class="col-md-3">
    MUSBE &copy; 2014
  </div>

  <div class="col-md-3">
    <a href="{{ route('terms') }}"> Terms of Service </a>
  </div>

  <div class="col-md-3">
    <a href="{{ route('about') }}"> About Us </a>
  </div>

  <div class="col-md-3">
    <a href="" data-toggle="modal" data-target="#contactModal"> Contact Us </a>
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
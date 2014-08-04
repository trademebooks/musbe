@extends('layouts.home')

@section('content')

	@for ($j = 1; $j <= 3; $j++)

		<div class="row">
			@for ($i = 1; $i <= 4; $i++)

				<!-- activities column 1 -->
				<div class="col-lg-3">

					<div class="post">
						<div class="border-bottom"> 
							<img src="https://s3.amazonaws.com/titlepages.leanpub.com/laravel-testing-decoded/large?1387953392">
						</div>

						<div class="padding10">
							<li> Book title, edition </li>
							<div> For </div>
							<div> By: </div>
							<div> Solutions: </div>
							<hr>

							<li> Course Material </li>
							post
							<hr>

							<li> Miscellaneous </li>
							post
							<hr>

							<div> Addtional Comments </div>
							<div> Meet up at Mac Uni only! Or else you die! </div>

							<div>
								<span> posted today </span> 
								<span> call </span>
								<span> price </span>
							</div>
						</div>
					</div>

				</div>

			@endfor

		</div>
		<br><br>

	@endfor

@stop

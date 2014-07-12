@extends('layouts.master')

@section('content')

	@for ($j = 1; $j <= 4; $j++)

		<div class="row">
			@for ($i = 1; $i <= 4; $i++)

				<!-- activities column 1 -->
				<div class="col-lg-3">
					<div class="post">
						<div class="post_float_left">
							<div class="post_float_left_image">
								<img src="custom_files/images/kitten.jpg" alt="">
							</div>

							<div>
								<div class="left_post_float_left">
									SDM
								</div>
								<div class="left_post_float right">
									3 intermediate
								</div>
							</div>
							<div class="clear"></div>
							<div>
								Weekdays
								Weekends				    					
							</div>

							<div>
								contact
							</div>
						</div>

						<div class="post_float_right">

							<div class="post_float_right_name">
								Cedric
								<div>
									Scaborough - Miliken Park
								</div>
							</div>

							<div class="post_float_right_description">
							I am very very pro come play
							me now.
							Posted 1 Day Ago	
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>

			@endfor

		</div>
		<br><br>

	@endfor

@stop
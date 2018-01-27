@extends('layouts.dashboard.master')

@section('title')
   Casue | Khaadim
@endsection

@section('content')
<!-- -- -- -- -- -- Grey BackGround -- -- -- -- -- -->
	<section class="greyBackground">
		<div class="container">
			<div class="col-md-offset-2 col-md-8">
				<h2 class="work-head">categories</h2>
			</div>
			<div class="margin-top"> </div>
			<div class="col-md-12 sl">
				<ul id="menuSlider">
					<li>Education</li>
					<li>Medical</li>
					<li>Health & Hygiene</li>
					<li>Charity</li>
					<li>Animals</li>
					<li>Creative</li>
					<li>Business</li>
					<li>Faith</li>
				</ul>
			</div>
		</div>
	</section>

	<div class="margin-top"> </div>

	<section class="container">
		<div class="col-md-offset-3 col-md-3">
			<div class="cat-thumbnail cat-thumbnail-active"></div>
		</div>
		<div class="col-md-3">
			<div class="cat-thumbnail"></div>
		</div>
	</section>

	<div class="margin-top"> </div>

	<section class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="post-thumbnail">
					<img src="{{ URL::to('resources/assets/img/post-img/post1.png') }}">
					<h3>PKR. 590,000/-</h3>
					
					<!--ProgressBar-->
					<div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
					  </div>
					</div>

					<h4>Medical Test for Child - Korangi</h4>
					<p>Health & Hygiene</p>
					
				</div>
			</div>

			<div class="col-md-4">
				<div class="post-thumbnail">
					<img src="{{ URL::to('resources/assets/img/post-img/post1.png') }}">
					<h3>PKR. 590,000/-</h3>
					
					<!--ProgressBar-->
					<div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
					  </div>
					</div>

					<h4>Medical Test for Child - Korangi</h4>
					<p>Health & Hygiene</p>
					
				</div>
			</div>

			<div class="col-md-4">
				<div class="post-thumbnail">
					<img src="{{ URL::to('resources/assets/img/post-img/post1.png') }}">
					<h3>PKR. 590,000/-</h3>
					
					<!--ProgressBar-->
					<div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
					  </div>
					</div>

					<h4>Medical Test for Child - Korangi</h4>
					<p>Health & Hygiene</p>
					
				</div>
			</div>
		</div>

		<div class="margin-top"></div>

		<div class="row">
			<div class="col-md-4">
				<div class="post-thumbnail">
					<img src="{{ URL::to('resources/assets/img/post-img/post1.png') }}">
					<h3>PKR. 590,000/-</h3>
					
					<!--ProgressBar-->
					<div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
					  </div>
					</div>

					<h4>Medical Test for Child - Korangi</h4>
					<p>Health & Hygiene</p>
					
				</div>
			</div>

			<div class="col-md-4">
				<div class="post-thumbnail">
					<img src="{{ URL::to('resources/assets/img/post-img/post1.png') }}">
					<h3>PKR. 590,000/-</h3>
					
					<!--ProgressBar-->
					<div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
					  </div>
					</div>

					<h4>Medical Test for Child - Korangi</h4>
					<p>Health & Hygiene</p>
					
				</div>
			</div>

			<div class="col-md-4">
				<div class="post-thumbnail">
					<img src="{{ URL::to('resources/assets/img/post-img/post1.png') }}">
					<h3>PKR. 590,000/-</h3>
					
					<!--ProgressBar-->
					<div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
					  </div>
					</div>

					<h4>Medical Test for Child - Korangi</h4>
					<p>Health & Hygiene</p>
					
				</div>
			</div>
		</div>

		<div class="margin-top"></div>

	</section>

@endsection
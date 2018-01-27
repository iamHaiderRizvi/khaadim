@extends('layouts.dashboard.master')

@section('title')
   How it works | Khaadim
@endsection

@section('content')

	<!-- -- -- -- -- -- Grey BackGround -- -- -- -- -- -->
	<section class="greyBackground">
		<div class="container">
			<div class="col-md-offset-2 col-md-8">
				<h2 class="work-head">HOW IT WORKS</h2>
				<p class="work-text">Khaadim is perfect for individuals, groups and organisations!</p>
			</div>

			<div class="col-md-offset-2 col-md-8">
				<iframe src="https://www.youtube.com/embed/-9NJesl_Bv4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="youtube-video"></iframe>
			</div>
		</div>
	</section>

	<!-- -- -- -- -- -- start a campaign -- -- -- -- -- -->
	<section class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="startCampaing">
				start a campaign
			</div>
		</div>
	</section>

	<!-- -- -- -- -- -- Steps to create -- -- -- -- -- -->
	<section class="container">
		<div class="col-md-offset-4 col-md-4">
			<div class="steps">
				Step 01
			</div>
		</div>
	</section>

	<section class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="stepText">
				Start Your Fundraising Campaign
			</div>
		</div>
	</section>

	<section class="container">
		<div class="col-md-offset-4 col-md-4">
			<div class="stepIcon">
				<img src="{{ URL::to('resources/assets/img/works/speaker.png') }}" />
			</div>
		</div>
	</section>


	<section class="container">
		<div class="col-md-offset-4 col-md-4">
			<div class="steps">
				Step 02
			</div>
		</div>
	</section>

	<section class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="stepText">
				Share with Family, Friends & Khaadim Community
			</div>
		</div>
	</section>

	<section class="container">
		<div class="col-md-offset-4 col-md-4">
			<div class="stepIcon">
				<img src="{{ URL::to('resources/assets/img/works/socialicons.png') }}" />
			</div>
		</div>
	</section>


<section class="container">
		<div class="col-md-offset-4 col-md-4">
			<div class="steps">
				Step 03
			</div>
		</div>
	</section>

	<section class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="stepText">
				Easily Accept Donations
			</div>
		</div>
	</section>

	<section class="container">
		<div class="col-md-offset-4 col-md-4">
			<div class="stepIcon">
				<img src="{{ URL::to('resources/assets/img/works/dollar.png') }}" />
			</div>
		</div>
	</section>

	<!-- -- -- -- -- -- Grey BackGround -- -- -- -- -- -->
	<section class="greyBackground">
		<div class="container">
			<div class="col-md-offset-2 col-md-8">
				<h2 class="work-head">common questions.</h2>
				<p class="work-text">Learn more about Khaadim and how it can help you fundraise</p>
			</div>
		</div>

		<section class="container">
			<div class="col-md-offset-4 col-md-4">
				<div class="LearnMore">
					Learn More
				</div>
			</div>
		</section>
	</section>

	



@endsection
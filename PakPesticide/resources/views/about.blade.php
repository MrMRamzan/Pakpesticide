@extends('layouts.master')

@section('body')
<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h1 class="about-text">- Our Mission -</h1>
				<h4 class="about-text">
					To provide the most actionable pesticide.
				</h4>
				<h1 class="about-text">About Us</h1>
				<br>
				<p class="about-text">
				At Apptopia, we all come to work every day because we want to solve the biggest problem in mobile. Everyone is guessing. Publishers don’t know what apps to build, how to monetize them, or even what to price them at. Advertisers & brands don’t know where their target users are, how to reach them, or even how much they need to spend in order to do so. Investors aren’t sure which apps and genres are growing the quickest, and where users are really spending their time (and money).
				Throughout the history of business, people use data to make more informed decisions. Our mission at Apptopia is to make the app economy more transparent. Today we provide the most actionable mobile app data & insights in the industry. We want to make this data available to as many people as possible (not just the top 5%).
				</p>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<img src="{{asset('img/about-img.jpg')}}" class="img-thumbnail">
				</div>
				<div class="col-md-6">
					<h1 class="about-text" style="padding-top: 40px;">The iDea of PakPesticides</h1>
					<p class="about-text">
					The idea for Bulldog was born in 2005 when founder, Simon Duffy, noticed that there were no straightforward skincare options for men who wanted products packed with natural ingredients. After two years of painstaking product research, design and development, Bulldog made its debut on the shelves of a leading British retailer. The award winning products are now available throughout the world.
					</p>
				</div>
			</div>
			<br>
			<h1 class="about-text">Our Investors</h1>
				<br>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="{{asset('img/sponser-1.jpg')}}" class="img-thumbnail" style="width: 200px;height: 150px;">	
					</div>
					<div class="col-md-3">
						<img src="{{asset('img/sponser-2.jpg')}}" class="img-thumbnail" style="width: 200px;height: 150px;">	
					</div>
					<div class="col-md-3">
						<img src="{{asset('img/sponser-3.jpg')}}" class="img-thumbnail" style="width: 200px;height: 150px;">	
					</div>
					<div class="col-md-3">
						<img src="{{asset('img/sponser-4.jpg')}}" class="img-thumbnail" style="width: 200px;height: 150px;">	
					</div>	
				</div>	
				<br>
				<br>
				<div class="row">
					<div class="col-md-3">
						<img src="{{asset('img/sponser-5.jpg')}}" class="img-thumbnail" style="width: 200px;height: 150px;">	
					</div>
					<div class="col-md-3">
						<img src="{{asset('img/sponser-6.jpg')}}" class="img-thumbnail" style="width: 200px;height: 150px;">	
					</div>
					<div class="col-md-3">
						<img src="{{asset('img/sponser-7.jpg')}}" class="img-thumbnail" style="width: 200px;height: 150px;">	
					</div>
					<div class="col-md-3">
						<img src="{{asset('img/sponser-8.jpg')}}" class="img-thumbnail" style="width: 200px;height: 150px;">	
					</div>	
				</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-md-6">
					<h1 class="about-text">Locate Us</h1>
					<p class="about-text">
					<q>We are here in Lahore You can meet us and we will guide you about your crops and appropriate pesticides for them</q>
					</p>
					<p class="about-text">
						<b>Adress:</b>&nbsp;Liberty Chowk,Lahore,Pakistan
						<br>
						<b>Email:</b>&nbsp;alfain69@gmail.com
						<br>
						<b>Contact#</b>&nbsp;+92-3346164001

					</p>
				</div>
				<div class="col-md-6">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Pakistan	&amp;ie=UTF8&amp;&amp;output=embed"></iframe><br />
				</div>

			</div>
	</section>
	<br>

@endsection()
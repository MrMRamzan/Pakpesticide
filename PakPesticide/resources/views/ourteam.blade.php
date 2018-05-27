@extends('layouts.master')

@section('body')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="team-text">MEET THE TEAM</h1>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<p class="team-text">
					<q>We're a team of 60 people based in Lahore, Pakistan. Half of us work on the product (marketing an management), and the other half work with the community. We love what we do, and who we do it with.</q>
					</p>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
		<br>
		<br>
		<div class="row home-row">
			<div class="col-md-4">
				<img src="{{asset('img/hamad.jpg')}}" class="img-thumbnail team-member">
				<p class="team-text" style="font-weight: bold;">CEO</p>
				<p class="team-text"><q>Life is 10% what happens to you and 90% how you react to it.</q></p>
			</div>
			<div class="col-md-4">
				<img src="{{asset('img/ramzan.jpg')}}" class="img-thumbnail team-member">
				<p class="team-text" style="font-weight: bold;">Director Public Relation</p>
				<p class="home-text"><q>Thought is the wind,knowledge the sail and mankind the vessel.</q></p>
			</div>
			<div class="col-md-4">
				<img src="{{asset('img/mursaleen.jpg')}}" class="img-thumbnail team-member">
				<p class="team-text" style="font-weight: bold;">Marketing Manager</p>
				<p class="home-text"><q>Start where you are.Use what you have.Do what you can.</q></p>
			</div>
		</div>	  		  	
	</div>
</section>
@endsection()
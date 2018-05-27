@extends('layouts.master')
@section('body')
<section>
	<div class="container">	
		<div class="row crops">
			<div class="col-md-12">
				<div class="dropdown">
    				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="float: left;">Select Category
    					<span class="caret"></span>
    				</button>
				    <ul class="dropdown-menu">
				      <li><a href="/selectedCrop">Wheat</a></li>
				      <li><a href="/selectedCrop">Rice</a></li>
				      <li><a href="/selectedCrop">Cotton</a></li>
				    </ul>
  				</div>
			</div>
		</div>
	</div>	
	</div>
	<div class="container">
	<!--Ist row-->
		<div class="row home-row">
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Cotton</h2>
					<img src="{{asset('img/cotton.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<a href="/selectedCrop">
						<button class="button button5">Read More</button>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Wheat</h2>
					<img src="{{asset('img/wheat.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<a href="/selectedCrop">
						<button class="button button5">Read More</button>
					</a>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Sugar-Cane</h2>
					<img src="{{asset('img/sugar-cane.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<a href="/selectedCrop">
						<button class="button button5">Read More</button>
					</a>
				</div>	
			</div>
		</div>	  	
	<!--2nd row-->
		<div class="row home-row">
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Maize</h2>
					<img src="{{asset('img/maize.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<a href="/selectedCrop">
						<button class="button button5">Read More</button>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Rice</h2>
					<img src="{{asset('img/rice.jpeg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<a href="/selectedCrop">
						<button class="button button5">Read More</button>
					</a>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Millets</h2>
					<img src="{{asset('img/millets.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<a href="/selectedCrop">
						<button class="button button5">Read More</button>
					</a>
				</div>	
			</div>
		</div>	  	
	</div>
</section>
@endsection()
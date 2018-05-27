@extends('layouts.master')

@section('body')
 <?php
	foreach ($data as $d1) {
		echo $d1['name'];
		$Grade;

		if ($d1['marks']=='90') {
			echo "Grade A";
			# code...

			$Grade="A";
		}else{
			echo "Grade B";

			$Grade="B";
		}

		switch ($Grade) {
			case 'A':
				echo "Marks = 90";
				break;
			case 'B':
				echo "Marks = 80";
				break;
			default:
				echo "Fault";
				break;
		}
	}
	?> 

<table>
	@foreach($data as $d1)
	<td> </td>
	@endforeach
</table>


	<div id="carousel-example" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example" data-slide-to="1"></li>
		    <li data-target="#carousel-example" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="item active">
		    <a href="#">
		      		<img src="{{asset('img/slider-1.jpeg') }}" style="width: 100%;height: 600px;"/>
		    </a>
	      	<div class="carousel-caption">
		       		<h3>Pak Pesticides</h3>
		        	<p>we provide the best</p>
	      	</div>

		</div>
		<div class="item">
		      <a href="#">
		      	<img src="{{asset('img/slider-2.jpg') }}" style="width: 100%;height: 600px;"/>
		      </a>
	    	  <div class="carousel-caption">
		        	<h3>Pak Pesticides</h3>
		        	<p>we provide the best</p>
	      	  </div>
	    </div>
	    <div class="item">
		    <a href="#">
		   		<img src="{{asset('img/slider-3.jpeg') }}"" style="width: 100%;height: 600px;"/>
		    </a>
	      	<div class="carousel-caption">
	        	<h3>Pak Pesticides</h3>
	        	<p>we provide the best</p>
	      	</div>
	    </div>
	</div><!-- class inner END-->

	  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
<!--slider end-->

<!--Team Intro -->
<br>
	<br>
	<br>
<section>
	<div class="container">
	<!--Ist row-->
		<div class="row home-row">
			<div class="col-md-6">
				<div class="home">
					<h2 class="home-heading">Products</h2>
					<img src="{{asset('img/product.jpg')}}" class="img-thumbnail home-image" style="width: 780px;height:320px;">
					<p class="home-text">We are providing the best products for your crops. We have analysts who will suggest the pesticides after the complete anslysis of your crop</p>
					<a href="products.html"><button class="button button5">Read More</button></a>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="home">
					<h2 class="home-heading">Sponsors</h2>
					<img src="{{asset('img/sponser.jpg')}}" class="img-thumbnail home-image" style="width: 780px;height:320px;">
					<p class="home-text">World's best companies are sponsering us differnt facilir=ties depending on the quality of our products.</p>
					<a href="about.html"><button class="button button5">Read More</button></a>
				</div>	
			</div>
		</div><!-- home row class end-->	
		<br>
		<br>
		<div class="row home-row">
			<div class="col-md-12">
				<div class="home">
					<div class="row">
						<div class="col-md-2"></div>
							<div class="col-md-8">
								<h2 class="home-heading">Our Team</h2>
								<img src="{{asset('img/alfain.jpg')}}" class="img-thumbnail home-image" style="width: 780px;height:320px;">	
								<p class="home-text">We have the best analysis, marketing and management team because we beleive in unity</p>
								<a href="team.html"><button class="button button5">Read More</button></a>
							</div>
						<div class="col-md-2"></div>
					</div>
				</div>	
			</div>
		</div><!-- home row class end-->	
		<br>
		<br>
		<div class="row home-row">
			<div class="col-md-6">
				<div class="home">
					<h2 class="home-heading">Crops</h2>
					<img src="{{asset('img/crops.jpg')}}" class="img-thumbnail home-image" style="width: 780px;height:320px;">
					<p class="home-text">We are telling you about the crops diseases and a complete guide about the pesticides which will help you get best product.</p>
					<a href="crops.html"><button class="button button5">Read More</button></a>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="home">
					<h2 class="home-heading">Reviews</h2>
					<img src="{{asset('img/reviews.jpg')}}" class="img-thumbnail home-image" style="width: 780px;height:320px;">
					<p class="home-text">The response of ou 	r customers is very good which is helping us to work with great zeal and zeast.</p>
					<a href="cart.html"><button class="button button5">Read More</button></a>
				</div>
			</div>	
		</div>
		<div class="row home-row">
			<div class="col-md-12">
				<div class="home">
					<div class="row">
						<div class="col-md-2"></div>
							<div class="col-md-8">
								<h2 class="home-heading">Contact Us</h2>
								<img src="{{asset('img/contact.jpg')}}" class="img-thumbnail home-image" style="width: 780px;height:320px;">
								<p class="home-text">We are here to help you.You can contact us and we will guide you about your crops.</p>
								<a href="contact.html"><button class="button button5">Read More</button></a>
							</div>
						<div class="col-md-2"></div>
					</div>
				</div>	
			</div>
		</div><!-- home row class end-->
	</div>	  	
</section>
<!-- Team intro end-->
@endsection()
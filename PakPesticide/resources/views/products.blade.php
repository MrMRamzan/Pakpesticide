@extends('layouts.master')
@section('body')
<section>
	<div class="container">
	<!--Ist row-->
		<div class="row home-row">
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Acetamiprid</h2>
					<img src="{{asset('img/acetamiprid.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<button class="button button5">Read More</button>
					<a href="cart.html">
						<button class="btn btn-primary">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
							</span>Add to Cart
						</button>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Azadirachtin</h2>
					<img src="{{asset('img/Azadirachtin.jpeg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<button class="button button5">Read More</button>
					<a href="cart.html">
						<button class="btn btn-primary">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
							</span>Add to Cart
						</button>
					</a>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Bifenthrin</h2>
					<img src="{{asset('img/Bifenthrin.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<button class="button button5">Read More</button>
					<a href="cart.html">
						<button class="btn btn-primary">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
							</span>Add to Cart
						</button>
					</a>
				</div>	
			</div>
		</div>	  	
	<!--2nd row-->
		<div class="row home-row">
			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Captan</h2>
					<img src="{{asset('img/Captan.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<button class="button button5">Read More</button>
					<a href="cart.html">
						<button class="btn btn-primary">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
							</span>Add to Cart
						</button>
					</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Imidacloprid</h2>
					<img src="{{asset('img/Imidacloprid.jpeg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<button class="button button5">Read More</button>
					<a href="cart.html">
						<button class="btn btn-primary">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
							</span>Add to Cart
						</button>
					</a>
				</div>	
			</div>

			<div class="col-md-4">
				<div class="home">
					<h2 class="home-heading">Malathion</h2>
					<img src="{{asset('img/Malathion.jpg')}}" class="img-thumbnail" style="width: 450px;height:250px;">
					<p class="home-text">See our products here</p>
					<button class="button button5">Read More</button>
					<a href="cart.html">
						<button class="btn btn-primary" onclick="myFunction()">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
							</span>Add to Cart
						</button>
					</a>
				</div>	
			</div>			
		</div>	  	
	</div>
</section>
@endsection()
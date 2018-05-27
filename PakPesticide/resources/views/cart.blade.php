@extends('layouts.master')
@section('body')
<section>
	<div class="container">
		<div class="row cart-head">
			<div class="col-md-4">
				<h3 class="cart-heading">Product Name</h3>
				<hr>
				<br>
				<h4 class="cart-product">Acetamiprid</h4>
				<br>
				<hr>
				<h4 class="cart-product">Azadirachtin</h4>
				<br>
				<hr>
				<h4 class="cart-product">Bifenthrin</h4>
				<br>
				<hr>
				<h4 class="cart-product">Captan</h4>
				<br>
				<hr>
				<h4 class="cart-product">Imidacloprid</h4>
				<br>
				<hr>
				<h4 class="cart-product">Malathion</h4>
				<br>
			</div>
			<div class="col-md-4">
				<h3 class="cart-heading">Price</h3>
				<hr>
				<br>
				<h4 class="cart-product">$200.0</h4>
				<br>
				<hr>
				<h4 class="cart-product">$250.0</h4>
				<br>
				<hr>
				<h4 class="cart-product">$280.0</h4>
				<br>
				<hr>
				<h4 class="cart-product">$190.0</h4>
				<br>
				<hr>
				<h4 class="cart-product">$300.0</h4>
				<br>
				<hr>
				<h4 class="cart-product">$260.0</h4>
				<br>
			</div>
			<div class="col-md-4">
				<h3 class="cart-heading">Production Company Link</h3>
				<hr>
				<br>
				<h4 class="cart-product">
					<a href="http://www.toxicsaction.org/problems-and-solutions/pesticides" target="_blank">Visit Site
					</a>
				</h4>
				<br>
				<hr>
				<h4 class="cart-product">
					<a href="http://www.toxicsaction.org/problems-and-solutions/pesticides" target="_blank">Visit Site
					</a>
				</h4>
				<br>
				<hr>
				<h4 class="cart-product">
					<a href="http://www.toxicsaction.org/problems-and-solutions/pesticides" target="_blank">Visit Site
					</a>
				</h4>
				<br>
				<hr>
				<h4 class="cart-product">
					<a href="http://www.toxicsaction.org/problems-and-solutions/pesticides" target="_blank">Visit Site
					</a>
				</h4>
				<br>
				<hr>
				<h4 class="cart-product">
					<a href="http://www.toxicsaction.org/problems-and-solutions/pesticides" target="_blank">Visit Site
					</a>
				</h4>
				<br>
				<hr>
				<h4 class="cart-product">
					<a href="http://www.toxicsaction.org/problems-and-solutions/pesticides" target="_blank">Visit Site
					</a>
				</h4>
				<br>
			</div>
		</div>
		<div class="row">
		<a href="order.html">
			<button class="btn btn-success">
			Buy Now
			</button></a>
		</div>
	</div>
</section>
<br>
<br>
<hr>
<section>
	<h1 class="cart-heading">Reviews</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset('img/review-1.jpg')}}" class="img-thumbnail team-member" style="border-radius: 30%;">
				<p class="review-text">
					<q>This site is just Awesome.We are using their product since this site is established and we are really happy to see such sites which are providing people with such information about the crops
					</q>
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{asset('img/review-2.jpg')}}" class="img-thumbnail team-member" style="border-radius: 30%;">
				<p class="review-text">
					<q>This site is just Awesome.We are using their product since this site is established and we are really happy to see such sites which are providing people with such information about the crops.
					</q>
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{asset('img/review-3.jpg')}}" class="img-thumbnail team-member" style="border-radius: 30%;">
				<p class="review-text">
					<q>This site is just Awesome.We are using their product since this site is established and we are really happy to see such sites which are providing people with such information about the crops.
					</q>
				</p>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset('img/review-4.jpg')}}" class="img-thumbnail team-member" style="border-radius: 30%;">
				<p class="review-text">
					<q>This site is just Awesome.We are using their product since this site is established and we are really happy to see such sites which are providing people with such information about the crops
					</q>
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{asset('img/review-5.jpg')}}" class="img-thumbnail team-member" style="border-radius: 30%;">
				<p class="review-text">
					<q>This site is just Awesome.We are using their product since this site is established and we are really happy to see such sites which are providing people with such information about the crops.
					</q>
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{asset('img/review-6.jpg')}}" class="img-thumbnail team-member" style="border-radius: 30%;">
				<p class="review-text">
					<q>This site is just Awesome.We are using their product since this site is established and we are really happy to see such sites which are providing people with such information about the crops.
					</q>
				</p>
			</div>
		</div>
	</div>
</section>
<br>
@endsection()
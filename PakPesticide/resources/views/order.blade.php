@extends('layouts.master')
@section('body')
<section id="contact">
	<div class="container">
 		<div class="row">
  			<div class="col-md-8">
				<form>
					<div class="form-group">
					  <label>Name</label>
					  <input type="text" class="form-control" placeholder="Enter Name">
					</div>
					<div class="form-group">
					  <label>Email Adress</label>
					  <input type="Email" class="form-control" placeholder="Enter Email Adress">
					</div>
					<div class="form-group">
					  <label>Street Adress</label>
					  <input type="Email" class="form-control" placeholder="Enter your street  Adress">
					</div>
					<div class="form-group">
					  <label>Product Name</label>
					  <input type="text" class="form-control" placeholder="Enter Company Name">
					</div>
					<div class="form-group">
					  <label>Amount</label>
					  <input type="number" min="1" max="5" class="form-control" placeholder="Enter Amount">
					</div>
					<div class="form-group">
					  <label>Message</label>
					  <textarea type="text" class="form-control" placeholder="Enter Message"></textarea>
					</div>
				  	<button class="button button2">Order</button>
				</form>
  			</div>
  			<div class="col-md-4">
	  			<img src="img/alfain.jpg" class="img-thumbnail alfain">
	  			<p class="alfain">
	  				<q>
	  				We are here to help you.You can contact us and we will guide you about your crops
	  				</q>
	  			</p>
	  			<p class="alfain" style="font-weight: bold;">Team Alfain</p>
	  				
  			</div>
		</div>
	</div>
</section>
@endsection()
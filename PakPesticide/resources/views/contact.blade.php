@extends('layouts.master')
@section('body')
<section id="contact">
	<div class="container">
 		<div class="row">
  			<div class="col-md-8"><!-- div having form-->
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
					  <label>Company Name</label>
					  <input type="text" class="form-control" placeholder="Enter Company Name">
				  </div>
				  <div class="form-group">
					  <label>Message</label>
					  <textarea type="text" class="form-control" placeholder="Enter Message"></textarea>
				  </div>
			  	  <button class="button button2">Submit</button>
			   </form>
	  			<div class="col-md-4">
		  			<img src="{{asset('img/alfain.jpg')}}" class="img-thumbnail alfain">
		  			<p class="alfain">
		  				<q>
		  					We are here to help you.You can contact us and we will guide you about your crops
		  				</q>
		  			</p>
		  			<p class="alfain" style="font-weight: bold;">
		  				Team Pak Pesticides
		  			</p>
		  		</div>
  			</div><!-- div having form-->
		</div>
	</div>
</section>
<br>
<br>
<br>
<br>
<br>
@endsection()
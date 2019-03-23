<?php
include("header.php");
?>
<style type="text/css">
.icolor
{
	color: #21d192;
	margin-bottom: 50px;
	margin-top: 50px;
}
.head2
{
	margin-bottom: 50px;
	margin-top: 20px;
	color:#21d192; 
}
</style>

<section>
	<div class="container" style="margin-top:70px;">
		<img src="images/all.png" width="100%">
	</div>
</section>

<section>
	<div class="container text-center">
		<h1 class="head2">How It Works</h1>
		<div class="row">
			<div class="col-md-4">
				<h3>Choose a Category</h3>
				<i class="fas fa-search fa-6x icolor"></i>
				<h5>Step-1 is to choose Category from workers as per your Requriments </h5>
			</div>
			<div class="col-md-4">
				<h3>Select a Location</h3>
				<i class="fas fa-map-marker-alt fa-6x icolor"></i>
				<h5>Step-2 is to choose location to find your nearby workers</h5>
			</div>
			<div class="col-md-4">
				<h3>Choose a Worker</h3>
				<i class="fas fa-wrench fa-6x icolor"></i>
				<h5>Step-3 is to choose Workers from several results given by WorkBing</h5>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container ">
		<h1 class="head2 text-center">Contact Us</h1>
		<div class="row">
			<div class="col-md-6">
	    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.8799225359303!2d70.78503631413682!3d22.28253798533278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDE2JzU3LjEiTiA3MMKwNDcnMTQuMCJF!5e0!3m2!1sen!2sin!4v1516630374146" height="300" width="500" frameborder="0">
	    		</iframe>
	    	</div>
			<div class="col-md-6">
		       	<label for="inputEmail4">Name</label>
		       		<input type="text" class="form-control" name="name">
		       	<label for="inputEmail4">Email</label>
		       		<input type="text" class="form-control" name="email">
		       	<label for="inputEmail4">Contact</label>
		       		<input type="text" class="form-control" name="contact">
		       	<label for="inputEmail4">Message</label>
		       		<input type="text" class="form-control" name="message">
		        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    		</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	function myMap() 
	{
		var mapProp= 
		{
		    center:new google.maps.LatLng(51.508742,-0.120850),
		    zoom:5,
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
</script>
<?php
include("footer.php");
?>
</body>
</html>

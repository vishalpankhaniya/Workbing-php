<?php
include("header.php");
?>

<?php
$conn=new mysqli('localhost','root','','workbing');
if (isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$dob=$_POST['dob'];
	$category=$_POST['category']; 
	$i=$_FILES['profile']['name']; 
	$tmp=$_FILES['profile']['tmp_name'];
	move_uploaded_file($tmp,'uploads/'.$i);
	$sql="INSERT INTO worker(fname,mname,lname,email,mobile,city,address,pincode,propic,dob,category,verified,rating)VALUES('$fname','$mname','$lname','$email','$mobile','$city','$address','$pincode','$i','$dob','$category','NO',0)";  

	if ($conn->query($sql) === TRUE) {
		?>

		<div class="alert alert-success">
			<strong>Success!</strong>Registered Successfully.
		</div>

		<?php
	} 
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>

<script type="text/javascript">
	$(document).ready(function() 
	{
		var readURL = function(input) 
		{
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				reader.onload = function (e) 
				{
					$('.profile-pic').attr('src', e.target.result);
				} 
				reader.readAsDataURL(input.files[0]);
			}
		}
		$(".file-upload").on('change', function()
		{
			readURL(this);
		});

		$(".upload-button").on('click', function() 
		{
			$(".file-upload").click();
		});
	});
</script>

<style type="text/css">
.profile-pic 
{
	max-width: 200px;
	max-height: 200px;
	display: block;
}

.file-upload 
{
	display: none;
}
.circle 
{
	border-radius: 1000px !important;
	overflow: hidden;
	width: 128px;
	height: 128px;
	border: 1px solid black;
	position:relative;
}
img 
{
	max-width: 100%;
	height: auto;
}
.p-image 
{
	position:relative;
	color: #666666;
	transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover 
{
	transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
	font-size: 1.2em;
}

.upload-button:hover {
	transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
	color: #999;
}
</style>





<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">
  Launch demo modal
</button>


<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">

<!-- Change class .modal-sm to change the size of the modal -->
<div class="modal-dialog modal-lg" role="document">


	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">



			<form action="" method="POST" enctype="multipart/form-data">
				<div class="container">
					<div class="row">
						<div class="col-md-1">
							<div class="circle">
								<!-- User Profile Image -->
								<img class="profile-pic" src="">
								<!-- Default Image -->
								<!-- <i class="fa fa-user fa-5x"></i> -->
							</div>
						</div>
						<div class="p-image col-md-1">
							<i class="fa fa-camera upload-button"></i>
							<input class="file-upload" type="file" accept="image/*"/ name="profile">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="inputEmail4">Firstname</label>
						<input type="text" class="form-control" name="fname">
					</div>
					<div class="form-group col-md-3">
						<label for="inputPassword4">Middlename</label>
						<input type="text" class="form-control" name="mname">
					</div>
					<div class="form-group col-md-3">
						<label for="inputPassword4">Lastname</label>
						<input type="text" class="form-control" name="lname">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputEmail4">Email</label>
						<input type="email" class="form-control" name="email">
					</div>
					<div class="form-group col-md-3">
						<label for="inputPassword4">Mobile</label>
						<input type="Mobile" class="form-control" name="mobile">
					</div>
					<div class="form-group col-md-2">
						<label for="inputPassword4">Date Of Birth</label>
						<input type="Date" class="form-control" name="dob">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-9">
						<label for="inputAddress">Address</label>
						<input type="text" class="form-control" name="address">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputState">City</label>
						<select id="inputState" class="form-control" name="city">
							<option selected>--Select City--</option>
							<option>Ahmedabad</option>
							<option>Ambaji</option> 
							<option>Anand</option>
							<option>Ankleshwar</option>
							<option>Bardoli</option>
							<option>Bharuch</option> 
							<option>Bhavnagar</option>
							<option>Bhuj</option>    
							<option>Botad</option>
							<option>Dabhoi</option>
							<option>Dahod</option> 
							<option>Deesa</option>
							<option>Dharampur</option>
							<option>Dhoraji</option>   
							<option>Dwarka</option>
							<option>Gandhidham</option>
							<option>Gandhinagar</option>
							<option>Godhra</option>
							<option>Gondal</option>
							<option>Hazira</option>
							<option>Idar</option>
							<option>Jamnagar</option>
							<option>Jetpur Navagadh</option>
							<option>Junagadh</option>
							<option>Keshod</option>
							<option>Khambhat</option>
							<option>Lunavada</option>
							<option>Mandvi</option>
							<option>Modasa</option>
							<option>Morbi</option>
							<option>Nadiad</option>
							<option>Navsari</option>
							<option>Palanpur</option>
							<option>Palitana</option>
							<option>Patan</option>
							<option>Porbandar</option>
							<option>Rajkot</option>
							<option>Rajula</option>
							<option>Rapar</option>
							<option>Saputara</option>
							<option>Siddhpur</option>
							<option>Surat</option>
							<option>Vadnagar</option>
							<option>Vadodara</option>
							<option>Vapi</option>
							<option>Veraval</option>
							<option>Visnagar</option>
							<option>Vyara</option>
							<option>Wadhwan</option>
							<option>Wankaner</option>
						</select>
					</div>	    	
					<div class="form-group col-md-3">
						<label for="inputZip">Pincode</label>
						<input type="text" class="form-control" maxlength="6" name="pincode">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputState">WorkCategory</label>
						<select id="inputState" class="form-control" name="category">
							<option selected>--select category--</option>
							<?php
							$sql1="SELECT * from category"; 
							$res=$conn->query($sql1);
							while($re=$res->fetch_object())
							{
								?>      
								<option value=<?php echo $re->cname;?>><?php echo $re->cname;?></option>
								<?php 
							}
							?>
						</select>
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Register</button>
			</form>
			...
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary btn-sm">Save changes</button>
		</div>
	</div>
</div>
</div>
<!-- Central Modal Small -->
<?php
include("footer.php");
?>
</body>
</html>
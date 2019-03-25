<?php
include "lock.php";
	$worker_id ="";
	if(isset($_GET['i']) AND is_numeric($_GET['i']) AND $_GET['i'] != "")
		$worker_id = $_GET['i'];
	else
		header("location:index.php");

	if(isset($_SESSION['uid']))
		$user_id = $_SESSION['uid'];


include "config.php";
include("header.php");

$sql_worker = mysqli_query($conn,"SELECT * FROM worker WHERE wid='$worker_id'");
$data_worker = mysqli_fetch_object($sql_worker);
$worker_name = $data_worker->fname." ".$data_worker->lname;

if (isset($_POST['submit']))
{
	
	$problem_stmt=mysqli_real_escape_string($conn,$_POST['problem_stmt']);
	$address=mysqli_real_escape_string($conn,$_POST['address']);
	$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
	$date=date("Y-m-d",strtotime($_POST['date']));
	$user_id = 1;
	
	$status = 0;
	$sql = "INSERT INTO `tbl_work_order` VALUES (NULL,".$user_id.",".$worker_id.",'".$date."','".$problem_stmt."','".$address."',".$mobile.",".$status.")";

	$SqlUpdateWorker=mysqli_query($conn,"UPDATE `worker` SET `work_status`=1 WHERE `wid`='$worker_id'");
	// echo $sql;
	// exit();
	if ($conn->query($sql) === TRUE) {
		?>

		<div class="alert alert-success">
			<strong> Success! </strong>Worker is successfully hired.
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

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-2">
			<h2>Hire Worker</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6  offset-2">
			<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputAddress">Problem Statement</label>
							<textarea class="form-control" name="problem_stmt"></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputAddress">Address</label>
							<textarea class="form-control" name="address"></textarea>
						</div>
					</div>


					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Mobile</label>
							<input type="text" class="form-control" name="mobile">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Date</label>
							<input type="date" class="form-control" name="date">
						</div>
					</div>

					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<h3>
						Worker Details
					</h3>
				</div>
				<div class="col-md-12">
					<h5>
						Name : <?=$worker_name?>
					</h5>
				</div>
				<div class="col-md-12">
					<img class="img img-fluid rounded-circle" src="uploads/<?=$data_worker->propic?>">
				</div>
				<div class="col-md-12">
					<h5>
						Mobile : <?=$data_worker->mobile?>
					</h5>
					<h5>
						Email : <?=$data_worker->email?>
					</h5>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>
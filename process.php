<?php
include 'config.php';
$output='';
$query="SELECT * FROM worker WHERE pincode =".$_POST["pincode"]." AND category='".$_POST['cat']."' AND work_status=0";
$result=mysqli_query($conn,$query);
if($result){

	if(mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_array($result))
		{
		
			
$output.='<div class="col-md-8 offset-2">
				<div class="row">
					<span class="col-md-4"><img src="uploads/'.$row['propic'].'" class="img img-thumbnail" width="40%"></span>
					<div class="col-md-3">'.$row["fname"]." ".$row['lname'].'</div>
					<div class="col-md-3">'.$row["mobile"].'</div>
					<div class="col-md-2"><a class="btn btn-info" href="HireWorker.php?i='.$row['wid'].'">Hire</a></div>
				</div>
			</div>';

	
		}
		echo $output;	
	}
	else
	{

		echo "<div class='col-md-8 offset-2'><div class='alert alert-warning'>Data Not Found</div></div>";
	}
}else
	{

		echo "<div class='col-md-8 offset-2'><div class='alert alert-warning'>Data Not Found</div></div>";
	}
?>
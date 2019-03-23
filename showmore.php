<?php
include("header.php");
$sid=$_GET['sid'];
?>
<!DOCTYPE html>
<html>
<body>


<div class="container">
<?php
	    $con=new mysqli('localhost','root','','sspgm');


	    $sql="SELECT * from Student where sid=$sid"; 
	    $res=$con->query($sql);
	    $row= mysqli_fetch_assoc($res);
?>
      <h1><?echo $row["fname"];?></h1>
      <?echo $row["mname"];?>
      <?echo $row["lname"];?>
      echo $row["mobile"];
      echo $row["email"];
      echo $row["dob"];
      echo $row["degree"];
      echo $row["branch"];
      echo $row["sem"];

      ?>

</body>
</html>		
	 
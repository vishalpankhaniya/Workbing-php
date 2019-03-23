<?php
session_start();
if (isset($_SESSION['login']))
 {

}
else
{
  header('location:login.php');
}
include("amenu.php");
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
<?php
if (isset($_POST['submit']))

 {


$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$state=$_POST['state'];
$dob=$_POST['dob'];
$degree=$_POST['degree'];
$branch=$_POST['branch']; 
$sem=$_POST['sem']; 
$i=$_FILES['profile']['name']; 
$tmp=$_FILES['profile']['tmp_name'];
move_uploaded_file($tmp,'uploads/'.$i);

        

      $sql="UPDATE student set fname='$fname',mname='$mname',lname='$lname',email='$email',mobile='$mobile',city='$city',address='$address',zip='$zip',state='$state',profile='$i',dob='$dob',degree='$degree',branch='$branch',sem='$sem' WHERE sid='$sid'";
      $res=$con->query($sql);
      if($sql)
        {
            header('Location:showstudent.php');
            $_SESSION["message"] = "Record Sucessfully Updated..";
        }
  } 
?>


<div class="container">
      <h2><span class="oi oi-pencil"></span>Personal Details</h2>
<form action="" method="POST" enctype="multipart/form-data">

      <div class="form-row">
    <div class="form-group col-md-4">
 <label for="inputEmail4">Firstname</label>
<input type="text" class="form-control" name="fname" value="<?php  echo $row["fname"];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Middlename</label>
<input type="text" class="form-control" name="mname" value="<?php  echo $row["mname"];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Lastname</label>
<input type="text" class="form-control" name="lname" value="<?php  echo $row["lname"];?>" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
<input type="email" class="form-control" name="email" value="<?php  echo $row["email"];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Mobile</label>
<input type="Mobile" class="form-control" name="mobile" value="<?php  echo $row["mobile"];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Date Of Birth</label>
      <input type="Date" class="form-control" name="dob" value="<?php  echo $row["dob"];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" value="<?php  echo $row["address"];?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" value="<?php  echo $row["city"];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state" value="<?php  echo $row["state"];?>">
        <option selected>Gujrat</option>
        <option>Maharashtra</option>
        <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" value="<?php  echo $row["zip"];?>">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label>Profile photo</label>
    <input type="file" name="profile" >
  </div>

  <h2><span class="oi oi-pencil"></span>Educational Details</h2>

<div  class="form-row">
  <div class="form-group col-md-4">
     <label for="inputState">Degree</label>
  <select class="form-control" name="degree" value="<?php  echo $row["Degree"];?>>
    <option>--Select Degree--</option>
  <option value="10th">10th</option>
  <option value="12th">12th</option>
  <option value="Diploma">Diploma</option>
  <option value="B.E.">B.E.</option>
  <option value="B.sc.">B.sc.</option>
  <option value=">M.sc.">M.sc.</option>
  <option value="Other">Other</option>
</select>
</div>


 <div class="form-group col-md-4">
<label for="inputState">Branch</label>
  <select class="form-control" name="branch" value="<?php  echo $row["branch"];?>>
    <option>--Select Branch--</option>
  <option value="Mechanical Engineering">Mechanical Engineering</option>
  <option value="Electrical Engineering">Electrical Engineering</option>
  <option value="Computer Engineering">Computer Engineering</option>
  <option value="Instrument Engineering">Instrument Engineering</option>
  <option value="Automobile Engineering">Automobile Engineering</option>
  <option value="Biomedical Engineering">Biomedical Engineering</option>
  <option value="Chemical Engineering">Chemical Engineering</option>
  <option value="Civil Engineering">Civil Engineering</option>
  <option value="Chemical Engineering">Chemical Engineering</option>
  <option value="Other">Other</option>
</select>
</div>

<div class="form-group col-md-4">
<label for="inputState">Semester</label>
  <select class="form-control" name="sem" value="<?php  echo $row["semester"];?>>
    <option>--Select Semester--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="none">none</option>
</select>
</div>

</div>

 
  <button type="submit" name="submit" class="btn btn-primary">Update</button>

</form>
</div>
</body>
</html>

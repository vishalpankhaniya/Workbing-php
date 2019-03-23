<?php
session_start();
include("header.php");
?>

<?php
if (isset($_POST['submit']))
{
  $usr = "admin";
  $psw = "vishal";
  $username =$_POST['user'];
  $password =$_POST['password'];  
  if (($username==$usr && $password==$psw))
  {
    $_SESSION['login']=true;
    header('location:ahome.php');
  }
  else
  {
    echo"Invalid username and password";
  }
}
?>
<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="user-inner">
        <div class="text-center">
         <h2>Login As User</h2>
         <a class="nav-link" data-toggle="modal" data-target="#userLRForm"><img src="images/man.png" height="130" width="130"></a>
       </div>

       <div class="md-form">
        <i class="fas fa-envelope prefix"></i>
        <input type="email" id="inputValidationEx" class="form-control validate">
        <label for="inputValidationEx" data-error="wrong" data-success="right">Type your email</label>
      </div>

      <div class="md-form">
        <i class="fas fa-lock prefix"></i>
        <input type="password" id="inputValidationEx2" class="form-control validate">
        <label for="inputValidationEx2" data-error="wrong" data-success="right">Type your password</label>
      </div>

      <button type="button" class="btn btn-primary">Login</button>
    </div>
  </div>

  <div class="col-md-6">
    <div class="worker-inner">
      <div class="text-center">
        <h2>Login As Worker</h2>
        <a class="nav-link" data-toggle="modal" data-target="#modalLRForm"><img src="images/worker.png" height="130" width="130"></a>
      </div>

      <div class="md-form">
        <i class="fas fa-envelope prefix"></i>
        <input type="email" id="inputValidationEx" class="form-control validate">
        <label for="inputValidationEx" data-error="wrong" data-success="right">Type your email</label>
      </div>

      <div class="md-form">
        <i class="fas fa-lock prefix"></i>
        <input type="password" id="inputValidationEx2" class="form-control validate">
        <label for="inputValidationEx2" data-error="wrong" data-success="right">Type your password</label>
      </div>

      <button type="button" class="btn btn-primary">Login</button>

    </div>
  </div>
</div>




<!--  -->

  <!-- <div class="container">
    <div class="main">
  	<h1><span class="oi oi-pencil">&nbsp</span>Login</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Username</label>
        <input type="text" class="form-control" name="user" >
      </div>
      <div class="form-group col-md-12">
        <label for="inputPassword4">Password</label>
        <input type="Password" class="form-control" name="password" >
        <br>
      </div>
      <div class="row">
        <div class="col-md-6">
        <input type="checkbox" class="form-control" name="check">Remembe me.</i>
      </div>
      <div class="col-md-6">
        <a href="#" class="link">Forgot Password?</a>
      </div>
      </div>
      <input type="submit" name="submit" class="btn btn-success col-md-12 form" value="Login">   
    </div> -->

  </div>
</body>
</html>
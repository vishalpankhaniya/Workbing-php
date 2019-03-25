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

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-3">
      <div class="user-inner">
        <h1 class="text-center m-0 p-md-bottom login-header">
          Log in and get to work
        </h1>
        <form>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
          </div>
          <button type="submit" class="btn btn-primary  login-button text-center">Continue</button>
        </form>
        <div class="login-footer">


          <div class="strike">
            <span>New to E-Karigar?</span>
          </div>

          <a href="WSignUp.php" class="btn btn-primary  signup-button text-center">Sign Up</a>
          <!-- <button type="submit" class="btn btn-primary  signup-button text-center">Sign Up</button> -->

        </div>
      </div>
    </div>
  </div>
</div>

  <!-- <div class="col-md-6">
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

-->


</div>
</body>
</html>
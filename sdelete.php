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
<?php
	    $con=new mysqli('localhost','root','','sspgm');
	    $sql="DELETE FROM `student` WHERE sid=$sid";
        $res=$con->query($sql);
        if($sql)
        {
            header('Location:showstudent.php');
        }
?>
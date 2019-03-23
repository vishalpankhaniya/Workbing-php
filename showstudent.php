<?php
session_start();
if (isset($_SESSION['login']))
 {

}
else
{
  header('location:login.php');
}include("amenu.php");

?>
<div class="container">
	
	<?php
	if(isset($SESSION['message']))
	{
		?>
		<div class="alert alert-success" role="alert">
 <?php echo $SESSION['message'];
 ?>
</div>	
<?php
	}
	?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">sr no</th>
      <th scope="col">First</th>
      <th scope="col">Middle</th>
      <th scope="col">Last</th>
      <th scope="col">Picture</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>

    </tr>
<?php
	    $con=new mysqli('localhost','root','','sspgm');


	    $sql="SELECT * from Student"; 
	    $res=$con->query($sql);
	    $str=1;

		
		while($re=$res->fetch_object())
		{
			
		?>	


  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $str;?></th>
      <td><?php echo $re->fname; ?> </td>
      <td><?php echo $re->mname; ?></td>
      <td><?php echo $re->lname; ?></td>
      <td><img src="uploads/<?php echo $re->profile; ?>" class="rounded" hight=90 width=90/></td>
      <td><a href="sdelete.php?sid=<?php echo $re->sid;?>"><h3><span class="oi oi-trash"></span></h3></a>
      	<td><a href="supdate.php?sid=<?php echo $re->sid;?>"><h3><span class="oi oi-pencil"></span></h3></a>
    </tr>
   
  </tbody>
  <?php
	$str++;	
			 }
	
?>
</table>
	
</div>
</body>
</html>

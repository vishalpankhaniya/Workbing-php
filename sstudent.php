<?php
include("header.php");
?>
<br>
<div class="container">
  <div class="form-row">

<?php
	    $con=new mysqli('localhost','root','','sspgm');


	    $sql="SELECT * from Student"; 
	    $res=$con->query($sql);
	    $str=1;

		
		while($re=$res->fetch_object())
		{
			
		?>
    
    <div class="card col-md-4">
   <a href="showmore.php?sid=<?php echo $re->sid; ?>"><img style="width: 150px; height:210px; margin-left: 100px;" class="card-img-top" src="uploads/<?php echo $re->profile; ?>" alt="Card image cap"></a>
  <div class="card-body">
    <h5 class="card-title"><?php echo $re->fname; ?> <?php echo $re->mname; ?> <?php echo $re->lname; ?> </h5>
   </a>
  </div>
</div>


	


  <?php
	$str++;	
			 }
	
?>
</div>	
</div>
</body>
</html>

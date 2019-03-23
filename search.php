<?php
include("header.php");
$conn=new mysqli('localhost','root','','workbing');
$cno=$_GET["cid"];
?>

<div class="container text-center">

<?php
        				$sql1="SELECT * from category where cid=$cno"; 
        				$res=$conn->query($sql1);
        				$re=$res->fetch_object()
?>
      

    				 <div style="margin-top: 100px;" class="col-md-12">
					<a href="search.php?cid=<?php echo $re->cid; ?>"><img src="<?php echo $re->url;?>"/></a>
						<h1><?php echo $re->cname;?></h1>

</div>
<div class="container text-center">
	<div class="row">
		<div class="col-md-8 offset-2 form-group">
			<input type="text" name="Search" class="form-control" placeholder="Search Using Pincode">
		</div>
	</div>
</div>


</div>

<?php
include("footer.php");
?>


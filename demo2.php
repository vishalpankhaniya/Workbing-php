<?php
include("header.php");
$conn=new mysqli('localhost','root','','workbing');
?>

<div class="container-fluid">
	<div class="container">

	<h1 class="text-center" style="margin-top: 100px;">Our Services</h1>

	<div class="row text-center">

					<?php
        				$sql1="SELECT * from category"; 
        				$res=$conn->query($sql1);
       	 				while($re=$res->fetch_object())
        				{
    				 ?>      
	
				<div class="col-md-4">
					<a href="search.php?cid=<?php echo $re->cid; ?>"><img src="<?php echo $re->url;?>"/></a>
						<h4><?php echo $re->cname;?></h4>
				</div>
				
				<?php
						}
					?>
			</div>
</div>
</div>

<?php
	include("footer.php");
?>
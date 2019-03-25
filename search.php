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
		<a href="search.php?cid=<?php echo $re->cid; ?>">
			
			<div class="category">
				<img  class="img-fluid" src="<?php echo $re->url;?>"/></a>
			</div>
			<h1><?php echo $re->cname;?></h1>

		</div>
		<div class="container text-center">
			<div class="row">
				<div class="col-md-8 offset-2 form-group">
					<input type="text" name="Search" id="search" class="form-control" placeholder="Search Using Pincode">
				</div>
			</div>
			<div class="row" id="container_of_worker">
				
			</div>
		</div>


	</div>

	<?php
	include("footer.php");
	?>
<script type="text/javascript">

	$("#search").keyup(function(){
		
		var val=this.value,
		cat_val = <?=$_GET['cid']?>;
		$.ajax({
			url:"process.php",
			data:{"pincode":val,"cat":cat_val},
			type:"post",
			success:function(res){
				$("#container_of_worker").html(res);
				// console.log(res);
			},
			error:function(err){
				console.log(err);
			}
		});
	});
</script>

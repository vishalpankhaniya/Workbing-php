<?php
include("header.php");
?>

<div class="container text-center">
	<h1>Search Worker By Pincode</h1>
	<form action="" method="post">
		<div class="col-md-6">
			<input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search Worker By Pincode">
		</div>

		<div id="result">
		</div>
	</form>
</div>	
<script>
	$(document).ready(function()
		{
		$('#search_text').keyup(function(){
			var txt=$(this).val();
			if (txt !='')
			 {

			 	$('#result').html('');
				$.ajax({
					url:"process.php",
					method:"post",
					data:{search:txt},
					dataType:"text",
					success:function(data)
					{
						$('#result').html(data);
					}

				});
			}
			else
			{
				$('#result').html('');
				$.ajax({
					url:"process.php",
					method:"post",
					data:{search:txt},
					dataType:"text",
					success:function(data)
					{
						$('#result').html(data);
					}

		
		});

			}

</script>
</body>
</html>


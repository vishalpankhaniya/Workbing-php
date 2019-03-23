<?php
$conn=new mysqli('localhost','root','','workbing');
$output='';
$query="SELECT * FROM worker WHERE pincode LIKE '%".$_POST["search"]."%'";
$result=mysqli_query($conn,$query);

if(mysql_num_rows($result)>0)
{
	$output .= '<h4 align="center">Search Result</h4>';
	$output .= '<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>Worker Name</th>
							<th>Worker Category</th>
							<th>Contact</th>
						</tr>';

						while ($row=mysqli_fetch_array($result))
						{
						
							$output.='
							<tr>
								<td>'.$row["fname"].'</td>
								<td>'.$row["category"].'</td>
								<td>'.$row["mobile"].'</td>
							</tr>';

							echo $output;	
						}
}
else
{
	echo "Data Not Found";
}
?>
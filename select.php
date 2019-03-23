<?php
$conn=new mysqli('localhost','root','','workbing');
$query="SELECT * FROM category ORDER BY cid DESC";
$statement = $conn->prepare($query);

if($statement->execute())
{
	while($row=$statement->fetch(PDO::FETCH_ASSOC))
	{
		$data[]=$row;
	}

	echo json_encode($data);
}
?>
<?php
	include 'db.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM image WHERE `id` = $id";
	
	$result = mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>alert('Deleted successfully!');</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong.');</script>";
	}


?>
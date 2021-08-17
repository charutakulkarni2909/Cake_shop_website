<!-- Not included
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<script type="text/javascript">
	
</script>
</head>
<body>
<?php
	include 'db.php';
	if(mysqli_connect_error())
	{
		die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
	}
	else
	{
		$id = $_GET['id'];
		//echo $id;

	
	$sql = "SELECT * FROM image WHERE `id` = $id";
	$result = mysqli_query($con,$sql);
	if($result)
	{
		$row = mysqli_fetch_assoc($result);
		$file_name = $row['file_name'];
		$name = $row['name'];
		$price = $row['price'];
		//echo $name;
	}
}
?>
<div id="content">

<form method="POST" action="" enctype="multipart/form-data">
	<input type="text" name="chocolate_name" id = "chocolate_name" placeholder="chocolate name" value="<?php echo htmlspecialchars($name); ?>"><br><br>
	<input type="text" name="price" placeholder="price" value="<?php echo $price;?>"><br><br>
	<input type="file" name="uploadfile" value="<?php echo $file_name; ?>"/>
	<br><br>

		
	<div>
		<button type="submit" name="upload">UPDATE</button>
	</div>
</form>

</div>
</body>
</html>
<?php
	if(isset($_POST['upload']))
	{
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/".$filename;
		$name = $_POST['chocolate_name'];
		$price = $_POST['price'];
		$sql_1 = "UPDATE `image` SET `id`='$id',`file_name`='$file_name',`name`='$name',`price`='$price' WHERE `id` = '$id'";
		$result = mysqli_query($con, $sql_1);
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
	echo "<script>alert(msg);</script>";
	}

	
?>
-->
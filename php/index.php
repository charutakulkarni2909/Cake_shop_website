<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/".$filename;
		$name = $_POST['chocolate_name'];
		$price = $_POST['price'];
		
	$db = mysqli_connect("localhost", "root", "", "Project");

		// Get all the submitted data from the form
		$sql = "INSERT INTO image (file_name,name,price) VALUES ('$filename','$name','$price')";

		// Execute query
		$result = mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
	echo "<script>alert(msg);</script>";
}
/*$result = mysqli_query($db, "SELECT * FROM image");
if($result){
	while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr><td>$row[name]</td>"; 
			echo "<td><img src='./image/$row[file_name]' width='100px' height='100px'></td>";
		}	
}*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">

<form method="POST" action="" enctype="multipart/form-data">
	<input type="text" name="chocolate_name" placeholder="chocolate name"><br><br>
	<input type="text" name="price" placeholder="price"><br><br>
	<input type="file" name="uploadfile" value=""/>
	<br><br>

		
	<div>
		<button type="submit" name="upload">UPLOAD</button>
		</div>
</form>
</div>
</body>
</html>

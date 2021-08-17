<!-- 
	Dispalying data (image , image name and price ) from data base.
-->
<?php
session_start();
if(!isset($_SESSION['first_name'])){
		header('Location:./login.php');
	}
	else{
		$my_name = $_SESSION['first_name'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Chocolates</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Bootstrap js-->
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 	<!--Google Font Link-->
 	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style type="text/css">
		table,th,td{
					border: none;
					margin: 2px;

			}
			table{
				width: 80%;
				height: 80%;
				margin: 20px;
			}
			th,td{
				font-family: dancing script,cursive;
				font-size: 25px;
				margin-top: 20px;
			}
			img{
				margin-top: 20px;
			}
			h1{
				font-family: dancing script,cursive;
				text-align: center;
				margin-top: 10px;
			}
	</style>

</head>
<body>
	<section id = "nav">
	<nav class="navbar navbar-expand-lg navbar-light  fixed-top bg-warning" style="background-color: #ffc107ad">
		<div class="container-fluid">
		    <a class="navbar-brand" href="timeline.php" style="text-align: center; font-family: dancing script , cursive;font-size: 40px;">Home</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
		     <!--<form class="d-flex">-->
		        <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id = "myInput" onkeyup="myFunction()">-->
		        <!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">-->

		        <!--<button class="btn btn-outline-success" type="submit">Search</button>&nbsp&nbsp-->
		   <!-- </form>-->
		</div>
	</nav>  
	</section>
	<br><br><br><br>
	<h1>Chocolates</h1>
</body>
</html>
<?php
$db = mysqli_connect("localhost", "root", "", "Project");
$result = mysqli_query($db, "SELECT * FROM image");
if($result){
	echo "<table>";
	while($row=mysqli_fetch_assoc($result))
		{	
			
			echo "<tr><td><img src='./image/$row[file_name]' width='400px' height='200px'></td>";
			echo "<td>$row[name]  $row[price]</td></tr>"; 
			

		}	
		echo "</table>";
		

}
?>
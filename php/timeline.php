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
	<title>Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Bootstrap js-->
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 	<!--Google Font Link-->
 	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	

	<style>

			.carousel-inner > .carousel-item > img {
  				height: 78vh;
  				margin : auto;
			}

			img{

				width : 100%;
				height: 100%;
			}
			.card{
				
				margin-top: 10px;
				margin-right: 10px;
				margin-bottom: 30px;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  				transition: 0.3s;
  				width: 100%;
  				height: 90%;
  				position: relative;
  				padding: 0px;

			}
			
			.card:hover {
  				box-shadow: 0 8px 16px 0 rgba(0,0,0,1);
			}

			#main_1{
				margin-right: 20px;
				margin-left: 20px;
			}
			#main_2{
				margin-left: 20px;
				margin-top: 0px;
				margin-bottom: 30px;

			}
			table,th,td{
					border: 1px solid black;
					margin: 20px;

			}
			table{
				width: 90%;
				height: 80%;
				margin-right: : 40px;
			}
			th,td{
				font-family: dancing script,cursive;
				font-size: 20px;
			}
			#main_3{
				padding-top: 30px;
				margin-top: 70px;
				background-image: url(main_3_bkg.jpg);
			}
			#main_3 h3,p{
				color: white;
			}
			.middle{
				margin-left: 40%;
				margin-right: 30%;

			}
			
			li{
				display: inline-block;
			}
			i{
				margin-top: 10px;
				margin-right: 5px;
				border-radius: 35px;
				
			}
			#main_4{
				margin-bottom: 30px;
			}
			
	</style>	

	
 	
</head>
<body class = "bg-light">
<section id = "navbar">
	<nav class="navbar navbar-expand-lg navbar-light  fixed-top py-3 py-lg-3 bg-warning" style="background-color: #ffc107ad">
		<div class="container-fluid">
		    <a class="navbar-brand" href="#" style="text-align: center; font-family: dancing script , cursive;font-size: 40px;">Eats & Treats</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#main_1" style = "text-align: center; font-family: dancing script , cursive;font-size: 30px;">Cakes</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#main_2" style="text-align: center; font-family: dancing script , cursive;font-size: 30px;">Contact</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#main_4"style="text-align: center; font-family: dancing script , cursive;font-size: 30px;">Share</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-align: center; font-family: dancing script , cursive; font-size: 30px;">
		            Gift
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="search.php">Choclates</a></li>
		            <li><a class="dropdown-item" href="#">Flowers</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#">Jewellary</a></li>
		          </ul>
		        </li>
		    </ul>
		   <!--<form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id = "filter" onkeyup="myFunction()">
		       <button class="btn btn-outline-success" type="submit">Search</button>&nbsp&nbsp
		    </form>-->
		    <a href = "logout.php"><button class="btn btn-outline-success" type="submit" name = "logout">Logout</button></a>
		    </div>
		</div>
	</nav>
</section>
<section id = "carousel">
	<div id="myslideshow" class="carousel slide" data-bs-ride="carousel">
	  	<div class="carousel-indicators">
	    <button type="button" data-bs-target="#myslidshow" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#myslidshow" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#myslidshow" data-bs-slide-to="2" aria-label="Slide 3"></button>
	    <button type="button" data-bs-target="#myslidshow" data-bs-slide-to="3" aria-label="Slide 4"></button>
  	</div>
  	<div class="carousel-inner">
    	<div class="carousel-item active" data-bs-interval = "500">
	      <img src="img1.jpg" class="d-block w-100 h-30" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5></h5>
	        <h4>Don’t wait until it’s too late. Eat that slice of cake!</h4>
	      </div>
    	</div>
	    <div class="carousel-item" data-bs-interval = "500">
	      <img src="img2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5></h5>
	        <h4>Forget the calories and just be happy.</h4>
	      </div>
	    </div>
	    <div class="carousel-item" data-bs-interval = "500">
	      <img src="img3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5></h5>
	        <h4>Happiness starts here.</h4>
	      </div>
    	</div>
    	<div class="carousel-item" data-bs-interval = "500">
	      <img src="img4.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5></h5>
	        <h4>A ready-to-eat slice of heaven.</h4>
	      </div>
    	</div>
  	</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<br><br><br>
<h1 class="text-center" style="font-family: dancing script,cursive; color: coral;">Welcome To Eats & Treats , <?php echo $my_name.' !';?></h1>
<section id = "main_1">
	<h1 class = "mb-3" style="text-align: center; font-family: dancing script , cursive; margin: auto; text-shadow:  1px -30px  0px antiquewhite;">Cakes</h1>
	<div class="row">
		<div class="col">
			<div class="card">
				<img src = "redvelvet.jpg" alt = "redvelvet" style="height: 80%;">
				<h4><b>Red Velvet Cake</b></h4>
				<h4>Rs.450</h4>
				<a href = "#">Can be delivered today</a>
			</div>

		</div>
		<div class="col">
			<div class="card">
				<img src = "blackforest.jpg" alt = "blackforest">
				<h4><b>Black Forest Cake</b></h4>
				<h4>Rs.470</h4>
				<a href = "#">Can be delivered today</a>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<img src = "cheescake.jpg" alt = "chesscake">
				<h4><b>Cheese Cake</b></h4>
				<h4>Rs.450</h4>
				<a href = "#">Can be delivered today</a>
			</div>
		</div>
		<div class="col">
			<div class="card">
			<img src = "choclatecake.jpg" alt = "chocalatecake" style="height: 100%;">
				<h4><b>Chocolate Cake</b></h4>
				<h4>Rs.470</h4>
				<a href = "#">Can be delivered today</a>
			</div>	

		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="card">
				<img src = "strawberrycake.jpg" alt = "strawberrycake">
				<h4><b>Strawberry Cake</b></h4>
				<h4>Rs.450</h4>
				<a href = "#">Can be delivered today</a>
			</div>

		</div>
		<div class="col">
			<div class="card">
				<img src = "fruitcake.jpg" alt = "fruitcake">
				<h4><b>Fruit Cake</b></h4>
				<h4>Rs.470</h4>
				<a href = "#">Can be delivered today</a>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<img src = "artisticChocolate.jpg" alt = "artisticChocolate">
				<h4><b>Artistic Chocolate Cake</b></h4>
				<h4>Rs.490</h4>
				<a href = "#">Can be delivered today</a>
			</div>
		</div>
		<div class="col">
			<div class="card">
			<img src = "butterscotchcake.jpg" alt = "butterscotchcake">
				<h4><b>Butter Scotch Cake</b></h4>
				<h4>Rs.470</h4>
				<a href = "#">Can be delivered today</a>
			</div>	

		</div>
	</div>
</section>
<section id = "main_2">
	<h1 style="font-family: dancing script,cursive; text-align: center; text-shadow:  1px -30px  0px antiquewhite;">Celebrate Every Occassion With Cake</h1>
	<div class="row">
		<div class="col-lg-6">
			<br><br>
			<div class="card " style="height: 90%; ">
			<table class="text-center" id = "mytable">
				<tr>
					<th>Cake by Type</th>
					<th>Cake by Flavour</th>
					<th>Cake by Occassion</th>
				</tr>		
				<tr>
					<td>Regular Cakes</td>
					<td>Butterscotch Cakes</td>
					<td>Birthday Cakes</td>
				</tr>
				<tr>
					<td>Photo Cakes</td>
					<td>Black Forest Cakes</td>
					<td>Anniversary Cakes</td>
				</tr>
				<tr>
					<td>Designer Cakes</td>
					<td>Strawberry Cakes</td>
					<td>Mother's Day Cakes</td>
				</tr>
				<tr>
					<td>Cup Cakes</td>
					<td>Pineapple Cakes</td>
					<td>Father's Day Cakes</td>
				</tr>
			</table>
			</div>
		</div>
		<div class="col-lg-6">
			
			<h4 style="font-family: dancing script,cursive; padding: 10px;"> We Will get back to you soon !</h4>
			<div class="card" style="width: 80%;  border-radius: 20px; margin-left: 30px;">
				<form method="POST" action="#">
				<div class="row">
					<div class="col">
	    					<input type="text" class="form-control" placeholder="First name" aria-label="First name" name="fname" style=" margin-left : 10px;margin-right: 10px; margin-top: 10px; width: 90%;">
	  				</div>
	  				<div class="col">
	    				<input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname" style="margin-right: 10px; margin-top: 10px;  width: 90%;">
	  				</div>
  				</div>
  				<input type="text" name="mobile" class="form-control" placeholder="mobile no" aria-label="Mobile No." name="mobile" style="margin-left: 10px; margin-bottom: 10px;margin-right: 10px; margin-top: 10px; width: 92%;" pattern="[0-9]{10}">
				<textarea class="form-control" rows="5" placeholder="add your order here(Occassion, flavor,quantity, Occassion date and time)" name="order_description" style="margin-left: 10px; margin-bottom: 10px;margin-right: 10px; margin-top: 10px; width: 92%;"></textarea>
				<input type="submit" name="submit" value="Submit" class="bg-info" style="margin-left: 20px; border-radius: 10px; font-size: 20px;">
				</form>	
			</div>
		</div>
	</div>
</section>
<section id = "main_3">
	<div class="container">
		<h1 class="text-center" style="color: white; margin-top: 50px;">Your Safety is our first priority</h1>
		<p class = "text-center"style="color: white;">steps we are taking to keep you safe</p>
		<br><br>
		<i class="fas fa-hand-sparkles fa-3x" style="color: white"></i>
		<h3>Sanitization</h3>
		<p>Sanitise our hands & kitchen surface in every 4 hours</p>
		<br>
		<i class="fas fa-head-side-mask fa-3x" style="color: white;"></i>
		<h3>Compulsory Mask & Gloves</h3>
		<p>Always on mask & Gloves environment</p>
		<br>
		<i class="fas fa-thermometer fa-3x" style="color: white;"></i>
		<h3>Temperature Checks</h3>
		<p>Real-time Temperature Tracking of kitchen & delivery Staff</p>
		<br>
		<i class="fas fa-people-arrows fa-3x" style="color: white;"></i>
		<h3>Contact Less Delivery</h3>
		<p>Maintaining the safe distance</p>
		<br>
	</div>	
</section>
<section id = "main_4">
	<div class="container-fluid bg-light">
		<h1 class="text-center" style="color: green ; margin-top: 30px; font-family: 'Goblin One';">Spread The Love</h1>
		<div class="middle">
				<ul>

					<li><a href = "#"><i class="fab fa-facebook-f fa-3x" style="color: blue;"></i></a></li>&nbsp&nbsp
					<li><a href="#"><i class="fab fa-instagram fa-3x" style="color: pink;"></i></a></li>
					&nbsp&nbsp
					<li><a href = "#"><i class="fab fa-twitter fa-3x" style="color: blue;"></i></a></li>
					&nbsp&nbsp
					<li><a href="#"><i class="fab fa-linkedin-in fa-3x" style="color :blue;"></i></a></li>
				<ul>
		</div>
	</div>	
</section>
<footer>
	<nav class="bg-secondary py-3">
		<ul>
			<li>@copyright</li>&nbsp&nbsp
			<li>contact : order@gmail.com</li>&nbsp&nbsp
			<li>9403957732</li>
		</ul>
		
	</nav>
</footer>

</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		include 'db.php';
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$mobile = $_POST['mobile'];
		$order_description = $_POST['order_description'];
		// If you fail to connect, show an error
    	if (mysqli_connect_error())
    	{
        	die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
   		}
   		//connection established 
   		else
   		{	
			$sql = "INSERT INTO `order`(`first_name`, `last_name`, `mobile`, `order_description`) VALUES ('$first_name','$last_name','$mobile','$order_description')";
			$result = mysqli_query($con , $sql);
			if($result)
			{
				echo "<script>alert('Thank you for your order! we will contact you soon.');</script>";
			}
			else{
				echo "<script>alert('Oops ! something went wrong, try again.');</script>";
			}
		}	

	}

?>
<?php
session_start();
$_SESSION['just_registered_email'] = $_POST['email'];
 

	$pass=$_POST["password"];
	$conpass=$_POST["confirmpassword"];
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$email=$_POST["email"];
	$bday=$_POST["birthday"];
	$gender = $_POST["gender"];
	
	if(isset($_POST["btn-submit"])){
		if($pass==$conpass){
			
			$_SESSION["firstname"]=$fname;
			$_SESSION["lastname"]=$lname;
			include('db.php');
			if (mysqli_connect_error())
    		{
        			die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
   			}
   			//connection established
   			else
   			{
   				$sql = "SELECT * FROM `registration` WHERE `email` = '$email'";
   				$result = mysqli_query($con , $sql);
   				$number_of_rows = mysqli_num_rows($result); 
   				if($number_of_rows>=1)
   				{
   					echo "<script>alert('Email is already registered');</script>";
   				}
   				else
   				{
	   				$sql_1 = "INSERT INTO `registration`(`first_name`, `last_name`, `email`, `gender`, `date_of_birth`, `password`) VALUES ('$fname','$lname','$email','$gender','$bday','$pass')";
	   				$result_1 = mysqli_query($con , $sql_1) OR die(mysqli_error($con));
	   				if($result_1)
	   				{
	   					echo "<h1>Registered Successfully!!!</h1>";
	   					
	   				}
	   				else
	   				{
	   					echo "Oops! Something went wrong. Please try again";
	   				}
   				}


   			}
			

		}
		else{
        	$message = "Password mismatch.Try again.";
        	echo "<script type='text/javascript'>alert('$message'); window.location.href= 'register.php'</script>";
		}
		mysqli_close($con);
	}
?>	
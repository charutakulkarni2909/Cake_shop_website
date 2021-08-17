<?php
	session_start();
?>
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
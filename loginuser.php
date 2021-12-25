<?php 
	session_start(); 
	//Add Database Connection
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	
	$conn = $db_handle->connectDB();
	
	// Test Database Connection
	if (!$conn)
  	{
  		$msg = "Could not connect to Poga Database. ".mysqli_error()." Click here to try again. <a href='index.php'> Home </a>";
		header ("Location: error.php?message=".$msg);
		exit();
  	}
	else
	{
		if (isset($_POST['usname']))
		{
			//Get Form Data
			$username = stripslashes($_POST['usname']);			 
			$username = mysqli_real_escape_string($conn,$username);

			$password = stripslashes($_POST['uspassword']);			 
			$password = mysqli_real_escape_string($conn,$password);

			//Checking if user existing in the database table or not
			$query1 = "SELECT username, password FROM users WHERE username='$username'"; 		 			
			$result1 = mysqli_query($conn,$query1) or die(mysql_error());						
			$rows1 = mysqli_fetch_assoc( $result1 );

			// Decrypt and Verify the hash against the password entered data field from database table
			$verify = password_verify($password, $rows1['password']);
			if ($verify) 
			{
				$_SESSION['username'] = $username;
				header("Location: admindashboard.php");
			} 
			else
			{
				$msg = "Username and Password is incorrect, try again.";
				header ("Location: error.php?message=".$msg);
			}
		}
	}
	
	mysqli_close($conn);
?>
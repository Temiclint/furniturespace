<?php
	
	//Add Database Connection
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	
	$conn = $db_handle->connectDB();
	
	// Test Database Connection
	if (!$conn)
  	{
  		$msg = "Could not connect to furniturespace Database. ".mysqli_error()." Click here to try again. <a href='index.php'> Home </a>";
		header ("Location: error.php?message=".$msg);
		exit();
  	}
	else
	{
		if (isset($_POST['user']))
		{
			//Get Form Data
			$username = stripslashes($_POST['uname']);			 
			$username = mysqli_real_escape_string($conn,$username);

            $firstname = stripslashes($_POST['ufname']);			 
			$firstname = mysqli_real_escape_string($conn,$username);

            $lastname = stripslashes($_POST['ulname']);			 
			$lastname = mysqli_real_escape_string($conn,$username);

            $phonenumber = stripslashes($_POST['uphonenumber']);			 
			$phonenumber = mysqli_real_escape_string($conn,$username);

			$password = stripslashes($_POST['upassword']);			 
			$password = mysqli_real_escape_string($conn,$username);

			$cpassword = stripslashes($_POST['cpassword']);			 
			$cpassword = mysqli_real_escape_string($conn,$username);

			$email = stripslashes($_POST['uemail']);			 
			$email = mysqli_real_escape_string($conn,$username);
		
           $registerdate = date("Y-m-d H:i:s");

            

			if ($password !== $cpassword)
			{
				$msg = "Password does not match, try again. <a href='index.php'> Home </a>";
				header ("Location: error.php?message=".$msg);
				exit();
			}
			
			//Encrypt Password and Email
			//$password = base64_encode(str_replace("'", "''", $_POST["password"]));	
			//$email = base64_encode(str_replace("'", "''", $_POST["email"]));	
			 
			// OR
			
			//Encrypt Password and Email using password_hash() function
			$password = password_hash($password, PASSWORD_DEFAULT);
			//$email = password_hash($_POST["email"], PASSWORD_DEFAULT);	

			
			//Prepare SQL query
			$strInsert = "insert into users(username,firstname,lastname,email,phonenumber,password,registerdate) values('$username', '$firstname', '$lastname', '$email','$phonenumber', '$password', '$registerdate')";

			if (!mysqli_query($conn,$strInsert)) 
			{
				$msg = "Could not connect: Check your connection. <a href='index.php'> Home </a>";
			}

			$msg = "User registration is successful. <a href='index.php'> Home </a>";
			header ("Location: confirm.php?message=".$msg);
		}
	}
?>	
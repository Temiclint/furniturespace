<?php

	//session_start();

	//if(!isset($_SESSION["username"]))
	//{
		//header("Location: login.php");
		//exit(); 
	//}
	
	//Add Database Connection
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	$conn = $db_handle->connectDB();

	if (!$conn)
  	{
  		$msg = "Could not connect to FurnitureSpace Database. ".mysqli_error()." Click here to try again. <a href='home.php'> Home </a>";
		header ("Location: error.php?message=".$msg);
		exit();
  	}
	else
	{
		if (isset($_POST['prdid']))
		{
			$pnumber = $_POST['prdid'];	
			$pname = $_POST['proname'];

			$strq = "delete from producttable where Productid = '$pnumber'" ;			
			$result = mysqli_query( $conn, $strq );
			
			if($result ) 
			{
				$msg = $pname. " Has Been Successfully Deleted";
				header ("Location: confirm.php?message=".$msg);	   
			}
			else
			{
				die("Could not delete product from  product data, click to return to <a href='home.php'> Home </a>" . mysqli_error());
			}				
		}
	}
	mysqli_close($conn);
?>
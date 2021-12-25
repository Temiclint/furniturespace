<?php
	
	//Add Database Connection
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	
	$conn = $db_handle->connectDB();

	// Test Database Connection
	if (!$conn)
  	{
  		$msg = "Could not connect to Furniture Space Database. ".mysqli_error()." Click here to try again. <a href='index.php'> Home </a>";
		header ("Location: error.php?message=".$msg);
		exit();
  	}
	else
	{
		if (isset($_POST['productname']))
		{
        //Get order Data
			$productname = $_POST['productname'];
			$productprice = $_POST['productprice'];		
			$fname = $_POST['fname'];
            $lname = $_POST['lname'];
			$address = $_POST['address'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $orderdate = date("Y-m-d H:i:s");
           
		
					//Prepare SQL query
					$strInsert = "insert into orders(Firstname,Lastname,Phonenumber,Address,email,productname,price,orderdate) values('$fname','$lname','$number','$address', '$email','$productname','$productprice', '$orderdate')";
					
					if (!mysqli_query($conn,$strInsert)) 
					{
						$msg = "SQL query error: Check your sql query."." Click here to try again. <a href='index.php'> Home </a>";
						header ("Location: error.php?message=".$msg);
						exit();	
					}

					$msg = "Your Order has been Successfully Placed";
					header ("Location: confirm.php?message=".$msg);
		}
	}				

				
	
?>

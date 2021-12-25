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
  		//die('Could not connect to Dynamic Transact Exchange Database');
		$msg = "Could not connect to Furniturespace Database. ".mysqli_error()." Click here to try again. <a href='home.php'> Home </a>";
		header ("Location: error.php?message=".$msg);
		exit();
  	}
	else
	{
		if (isset($_POST['ordid']))
		{
			$onum = $_POST['ordid'];	
			
			//$_SESSION['product_number'] = $_POST['productnumber'];
						
			$strq = "Select * FROM orders where orderid = '$onum'";			
			$result = mysqli_query( $conn, $strq );

			//Display a record to update in a form table
			while ( $row = mysqli_fetch_assoc( $result ) ) 
			{

                echo "<center>";
				echo "<form method='post' class ='displaytable' action='deleteosave.php'>";		
				echo "<table border='1' width='85%'>";
				
				echo "<tr> <td> <h2 align='center'> Confirm Order Record To DELETE </h2> </td> </tr>";
				
				echo "<tr><td class='order-label'> Order id :<input type class='order-inpttext'='text' id='ordid' name='ordid' value=".$row['orderid']." readonly /> </td> </tr>";
                echo "<tr><td class='order-label'> First Name :<input type class='order-inpttext'='text' id='firstname' name='firstname' value=".$row['Firstname']." readonly /> </td> </tr>";

				echo "<tr><td class='order-label'> Last Name :<input  class='order-inpttext'type='text' id='lastname' name='lastname' value=".$row['Lastname']." readonly /> </td> </tr>";	
				echo "<tr><td class='order-label'> Phone Number :<input class='order-inpttext' type='text' id='phonenumber' name='phonenumber' value=".$row['Phonenumber']." readonly /> </td> </tr>";	

                echo "<tr><td class='order-label'> Detailed Address :<input class='order-inpttext' type='text' id='address' name='address' value=".$row['Address']." readonly /> </td> </tr>";	
				echo "<tr><td class='order-label'> Product Name :<input  class='order-inpttext' type='text' id='productname' name='productname' value=".$row['productname']." readonly /> </td> </tr>";	

                echo "<tr><td class='order-label'> Client Email :<input  class='order-inpttext' type='text' id='email' name='email' value=".$row['email']." readonly /> </td> </tr>";	
				
				echo "<tr><td class='order-label'> Product price :<input class='order-inpttext' type='text' id='proprice' name='proprice' value=".$row['price']." readonly /> </td> </tr>";	
				echo "<tr><td class='order-label'> Date Ordered :<input class='order-inpttext' type='text' id='orderdate' name='orderdate' value=".$row['orderdate']." readonly /> </td> </tr>";	

				echo "<tr><td> <input class='placeorder btnorder' type='submit' value='Delete Order' /> </td> </tr>";		


				echo "</table>";				
				echo "</form>";	
				echo "<center>";				
			}
		}
	}
	mysqli_close($conn);
?>
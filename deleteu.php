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
		if (isset($_POST['usid']))
		{
			$unum = $_POST['usid'];	
			
			//$_SESSION['product_number'] = $_POST['productnumber'];
						
			$strq = "Select * FROM users where userid = '$unum'";			
			$result = mysqli_query( $conn, $strq );

			//Display a record to update in a form table
			while ( $row = mysqli_fetch_assoc( $result ) ) 
			{

                echo "<center>";
				echo "<form method='post' class ='displaytable' action='deleteusave.php'>";		
				echo "<table border='1' width='85%'>";
				
				echo "<tr> <td> <h2 align='center'> Confirm User Record To DELETE </h2> </td> </tr>";
				
				echo "<tr><td class='order-label'> User Id :<input type class='order-inpttext'='text' id='usid' name='usid' value=".$row['userid']." readonly /> </td> </tr>";
                echo "<tr><td class='order-label'> User Name :<input type class='order-inpttext'='text' id='uname' name='uname' value=".$row['username']." readonly /> </td> </tr>";
                echo "<tr><td class='order-label'> First Name :<input type class='order-inpttext'='text' id='firstname' name='firstname' value=".$row['firstname']." readonly /> </td> </tr>";

				echo "<tr><td class='order-label'> Last Name :<input  class='order-inpttext'type='text' id='lastname' name='lastname' value=".$row['lastname']." readonly /> </td> </tr>";	
				echo "<tr><td class='order-label'> Phone Number :<input class='order-inpttext' type='text' id='phonenumber' name='phonenumber' value=".$row['phonenumber']." readonly /> </td> </tr>";		

                echo "<tr><td class='order-label'> Client Email :<input  class='order-inpttext' type='text' id='email' name='email' value=".$row['email']." readonly /> </td> </tr>";
				echo "<tr><td class='order-label'> Date Registered :<input class='order-inpttext' type='text' id='registerdate' name='registerdate' value=".$row['registerdate']." readonly /> </td> </tr>";	

				echo "<tr><td> <input class='placeorder btnorder' type='submit' value='Delete User' /> </td> </tr>";		


				echo "</table>";				
				echo "</form>";	
				echo "<center>";				
			}
		}
	}
	mysqli_close($conn);
?>
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
		if (isset($_POST['prdid']))
		{
			$pnum = $_POST['prdid'];	
			
			//$_SESSION['product_number'] = $_POST['productnumber'];
						
			$strq = "Select * FROM producttable where Productid = '$pnum'";			
			$result = mysqli_query( $conn, $strq );

			//Display a record to update in a form table
			while ( $row = mysqli_fetch_assoc( $result ) ) 
			{

                echo "<center>";
				echo "<form method='post' class ='displaytable' action='deletepsave.php'>";		
				echo "<table border='1' width='85%'>";
				
				echo "<tr> <td> <h2 align='center'> Confirm Product Record To DELETE </h2> </td> </tr>";
				
				echo "<tr><td class='order-label'> Product id :<input type class='order-inpttext'='text' id='prdid' name='prdid' value=".$row['Productid']." readonly /> </td> </tr>";
				echo "<tr><td class='order-label'> Product Primary Image   : <img src='new image/" .$row['productimage1']. "' width='100' height='50' />";
				
				echo "<tr><td class='order-label'> Product Name :<input  class='order-inpttext'type='text' id='proname' name='proname' value=".$row['productname']." readonly /> </td> </tr>";	
				echo "<tr><td class='order-label'> Product price :<input class='order-inpttext' type='text' id='proprice' name='proprice' value=".$row['productprice']." readonly /> </td> </tr>";	

                echo "<tr><td class='order-label'> Product Description :<input class='order-inpttext' type='text' id='prodescription' name='prodescriptiom' value=".$row['productdescription']." readonly /> </td> </tr>";	
				echo "<tr><td class='order-label'> Detailed Descriptiom :<input  class='order-inpttext' type='text' id='detdescription' name='detdescription' value=".$row['detaileddescription']." readonly /> </td> </tr>";	
				
				echo "<tr><td class='order-label'> Product Secondary Image : <img src='new image/" .$row['productimage2']. "' width='100' height='50' />";	
				echo "<tr><td class='order-label'> Date Added :<input class='order-inpttext' type='text' id='dateadded' name='dateadded' value=".$row['dateadded']." readonly /> </td> </tr>";	

				echo "<tr><td> <input class='placeorder btnorder' type='submit' value='Delete Product' /> </td> </tr>";		


				echo "</table>";				
				echo "</form>";	
				echo "<center>";				
			}
		}
	}
	mysqli_close($conn);
?>
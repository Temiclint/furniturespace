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
		if (isset($_POST['productName']))
		{
        //Get Form Data
			$productname = $_POST['productName'];
			$productprice = $_POST['productPrice'];		
			$productdescription = $_POST['productdescription'];
            $detailedDescription = $_POST['detailedDescription'];
			$materialsused = $_POST['materialsused'];
           
			
			if (($_FILES['my_file']['name']!="") && ($_FILES['my_file2']['name']))
			{
				// Where the file is going to be stored
				$target_dir = "new image/productimage/";
				$target_sub_dir = "productimage/";
				
				$file = $_FILES['my_file']['name'];
                $file2 = $_FILES['my_file2']['name'];

                $path = pathinfo($file);
                $path2 = pathinfo($file2);

				$filename = $path['filename'];
                $filename2 = $path2['filename'];

				$ext = $path['extension'];
                $ext2 = $path2['extension'];
				
				$temp_name = $_FILES['my_file']['tmp_name'];
                $temp_name2 = $_FILES['my_file2']['tmp_name'];
				
				$path_filename_ext = $target_dir.$filename.".".$ext;
				$path_filename_ext2 = $target_sub_dir.$filename.".".$ext;

                $path_filename_extb = $target_dir.$filename2.".".$ext2;
				$path_filename_ext2b = $target_sub_dir.$filename2.".".$ext2;

                
				
				$dateadded = date("Y-m-d H:i:s");
				$username = "admin";
			 
				// Check if file already exists
				if (file_exists($path_filename_ext) || file_exists($path_filename_extb)) 
				{
					$msg = "Sorry, file already exists."." Click here to try again. <a href='index.php'> Home </a>";
					header ("Location: error.php?message=".$msg);
					exit();				
				}
				else
				{
					move_uploaded_file($temp_name,$path_filename_ext);
                    move_uploaded_file($temp_name2,$path_filename_extb);
					
					//Prepare SQL query
					$strInsert = "insert into producttable(productname,productdescription,detaileddescription,productimage1,productimage2,productprice,materialsused,dateadded,username) values('$productname','$productdescription','$detailedDescription','$path_filename_ext2', '$path_filename_ext2b','$productprice','$materialsused', '$dateadded', '$username')";
					
					if (!mysqli_query($conn,$strInsert)) 
					{
						$msg = "SQL query error: Check your sql query."." Click here to try again. <a href='index.php'> Home </a>";
						header ("Location: error.php?message=".$msg);
						exit();	
					}

					$msg = "New Product Added is successful";
					header ("Location: confirm.php?message=".$msg);
				}
			}					

			
		}
	}
?>

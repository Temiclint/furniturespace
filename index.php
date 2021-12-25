<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Furniture Space</title>
  <link rel="icon" type="image/png" href="favicon_io\favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io\favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="style2.css">
</head>
<body>

<?php
	require_once("dbcontroller.php");
	$db_handle = new DBController();
?>


<div class="heros-wrapper">
<!-- Navigation -->

<?php 
  
  include 'navigation.php';
  
  ?>


    <div class="herosection">
      <div class="pandbtnhero">
        <p class="main-statement">
          Let your Furniture <br>speak class
        </p>
        <a href="#productgallery" class="viewgallerybtn"> View Gallery </a>
      </div>
      <img class="heroimg" src="new image\heroresized-removebg-preview.png" alt="Heroes">
    </div>

  </div>

  <div class="productsection" id ="productgallery">
    <h2 class="product-heading">
      PRODUCT GALLERY
    </h2>
    
    <div class="products">
    <?php
				$products_array = $db_handle->runQuery("SELECT * FROM producttable ORDER BY Productid ASC");
				if (!empty($products_array)) 
				{ 
					foreach($products_array as $key=>$value)
        {
			?>
      
      <div class="product-list">
        <img class="product-img" src="new image/<?php echo $products_array[$key]["productimage1"]; ?>" />
        <h3 class="product-name">  <?php echo $products_array[$key]["productname"]; ?></h3>
        <p class="product-description" ><?php echo $products_array[$key]["productdescription"]; ?> </p>
        <p class="pricehome" > &#8358;<?php echo $products_array[$key]["productprice"]; ?></p>
        <a href="productdetail.php?productimage1=<?php echo $products_array[$key]["productimage1"]; ?> &productimage2=<?php echo $products_array[$key]["productimage2"]; ?>&productname=<?php echo $products_array[$key]["productname"]; ?>&productprice=<?php echo $products_array[$key]["productprice"]; ?>&productpdescription=<?php echo $products_array[$key]["productdescription"]; ?>&detaileddescription=<?php echo $products_array[$key]["detaileddescription"];  ?>&materialsused=<?php echo $products_array[$key]["materialsused"]; ?> ">
        <input class ="view-details-btn" type="button"  style="font-family: 'Raleway, sans-serif'; font-size: 1.5rem; font-weight: 600;" value ="View Details">
        </a>
      </div>
      <?php
					}
				}
			?>
    </div>
  </div>

  <div class=" our-services">
    <h2 class="services-header"> WE OFFER ADDED SERVICES TO OUR CUSTOMERS</h2>
    <div class="home-delivery">
      <div class="hdd">
        <h3 class="home-delivery-heading"> GET YOUR FURNITURE DELIVERED RIGHT TO YOUR DOOR STEP</h3>
        <p class="home-delivery-description">
          We deliver your goods, whether just a stood or an entire home furniture
          to your doorstep anywhere in Nigeria, within 3 days of completion of payment.
          Our delivery service are trained to handle your items with care and have them
          delivered to you in perfect condition
        </p>
      </div>
      <div class="hdd">
        <img src="new image\fedex-truck-3f96.jpg" class="home-delivery-img" alt="">
      </div>
    </div>
    <div class="home-delivery">
      <div class="hdd">
        <img src="new image\furniture installation.jpg" class="home-delivery-img" alt="">
      </div>
      <div class="hdd">
        <h3 class="home-delivery-heading"> FURNITURE INSTALLATION AND SETTING</h3>
        <p class="home-delivery-description">
          We offer furniture installation and arrangement till you are satisfied with
          the way the space is looking, our team of abled men and women will move them
          around and make sure the are appealing to the eye and you have a functional
          space.
        </p>
      </div>

    </div>
    <div class="home-delivery">
      <div class="hdd">
        <h3 class="home-delivery-heading"> FIX AND RECOVER OLD AND WORN OUT FURNITURE</h3>
        <p class="home-delivery-description">
          We will fix and recover old and worn out furniture you have and bring
          back their beauty using modern and safe techniques, to give them a Tasteful
          finish you would be proud off, do not throw your old furniture out, our team of
          expert will examine and fix them.
        </p>
      </div>
      <div class="hdd">
        <img src="new image\repair.jpg" class="home-delivery-img" alt="">
      </div>
    </div >

  <a class ="contact-service" href="contactus2.php">CONTACT US</a>
  </div>
  <!-- footer -->
  <?php 
  
  include 'footer.php';
  
  ?>

  <script src="https://use.fontawesome.com/e9156ceaca.js"></script>
  <script src="index.js"></script>
</body>


</html>

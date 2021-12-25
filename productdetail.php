<?php session_start(); ?>

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

    
<!-- product details section -->


  </div>
  <div class="product-first-section">
    <div class="pp productimage">
      <img class="actualproductimg" src="new image\<?php echo $_GET["productimage1"]; ?>" alt="<?php echo $_GET["productname"]; ?>">
      <div class="smallimages">
        <img class="smallimga" src="new image\<?php echo $_GET["productimage1"]; $_SESSION["productimage1"]  = $_GET["productimage1"]; ?>" alt="<?php echo $_GET["productname"]; ?>">
        <img class="smallimga" src="new image\<?php echo $_GET["productimage2"]; ?>" alt="<?php echo $_GET["productname"]; ?>">

      </div>
    </div>
    <div class="pp product-title">
      <h3 class="ptt">
      <?php echo $_GET["productname"]; $_SESSION['productname'] = $_GET["productname"]; ?>
      </h3>
      <p class="ptp">
      <?php echo $_GET["productpdescription"]; ?>
      </p>
      <h3 class="ptprice">
          <?php echo $_GET["productprice"];
      $_SESSION['productprice'] = $_GET["productprice"]; ?>
      </h3>

      <a href="index.php" class="ptbtn ptcancel">Cancel</a>
      <a href="order2.php" class="ptbtn ptplaceorder">Place Order</a>
    </div>
  </div>
  <div class="productdescription">
  <div class="productdescriptiontext">
    <h3 class="pdh">
      PRODUCT DESCRIPTION
    </h3>
    <p class="pdp">
    <?php echo $_GET["detaileddescription"]; ?>
    </p>
    <p class="pddetails">

      <span class="pddspan">Materials Used:</span> <?php echo $_GET["materialsused"]; ?>
    </p>
    <hr class="pdhr">
    <p class="pddetails">
      <span class="pddspan">Dimension:</span> Based On Request
    </p>
    <hr class="pdhr">
    <p class="pddetails">
      <span class="pddspan">Color:</span> Based on Request
    </p>
    <hr class="pdhr">
    <p class="pddetails">
      <span class="pddspan">Distribution:</span> Based on Request
    </p>
    <hr class="pdhr">
  </div>
  <div class="productdescriptionimg">
    <img class="pdi2" src="new image\<?php echo $_GET["productimage2"]; ?>" alt="<?php echo $_GET["productname"]; ?>">
  </div>
  </div>

 




  </div>
  <!-- footer -->
  <?php 
  
  include 'footer.php';
  
  ?>

  <script src="https://use.fontawesome.com/e9156ceaca.js"></script>
  <script src="index.js"></script>
</body>


</html>

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

  <div class="order2wrapper">
      <form  name ="addproducts" class="addproductfrm" method ="post" action="saveproducts.php" enctype="multipart/form-data">
        <h3 class ="orderhead">Input Product Details to Add</h3>

        <label class="order-label" for="productName">Product Name</label><br/>
        <input class ="order-inpttext" type="text" name="productName" id=""><br/>
        <label class="order-label" for="productPrice">Product Price</label><br/>
        <input class ="order-inpttext"  type="text" name="productPrice" id=""><br/>
        <label class="order-label" for="productdescription">Product Simple Descriptions</label><br/>
        <input class ="order-inpttext"  type="text" name="productdescription" id=""><br/>
        <label class="order-label" for="detailedDescription">Detailed Description</label><br/>
        <input class ="order-inpttext" type="text" name="detailedDescription" id=""><br/>
        <label class="order-label" for="materialsused">materialsused</label><br/>
        <input class ="order-inpttext" type="text" name="materialsused" id=""><br/>
        <label class="order-label" for="productimage1">Main Image</label><br/>
        <input class ="order-inpttext" type="file" name="my_file" id=""><br/>
        <label class="order-label" for="productimage2">Secondary Image</label><br/>
        <input class ="order-inpttext" type="file" name="my_file2" id=""><br/>
          
        <input  class ="placeorder btnorder" type="submit" value ="Add Products">


     </form>
     </div>

     <?php 
  
  include 'footer.php';
  
  ?>

  <script src="https://use.fontawesome.com/e9156ceaca.js"></script>
  <script src="index.js"></script>
</body>


</html>

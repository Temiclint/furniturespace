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
  </div>

  <div class="product-first-section">
    <div class="pp productimage">
      <img class="actualproductimg" src="new image\wardrobe 3.jpg" alt="">
      <div class="smallimages">
        <img class="smallimga" src="new image\wardrobe 3.jpg" alt="">
        <img class="smallimga" src="new image\wardrobe2.jpg" alt="">

      </div>
    </div>
    <div class="pp product-title">
      <h3 class="ptt">
        WARDROBES
      </h3>
      <p class="ptp">
      Our Four-door Wardrobe with mirror doors in Stirling Oak with matt black fronts. Gives you big and spacious Wardrobe with plenty of room for clothes. This beautiful high-class bedroom collection is a perfect choice for modern and functional living. Inc.
      also has attached LED flash 4 point footswitch.<br>
      You can have it in various door length
      <ul class="ptul">
        <li class="ptli"><i class="fas fa-chair"></i>2 Door Wardrobe</li>
        <li class="ptli">3 Door Wardrobe</li>
        <li class="ptli">3 Door and a central Mirror</li>
      </ul>
      </p>
      <h3 class="ptprice">N93,000</h3>
      <a href="index2.php" class="ptbtn ptcancel">Cancel</a>
      <a href="order2.php" class="ptbtn ptplaceorder">Place Order</a>
    </div>
  </div>
  <div class="productdescription">
  <div class="productdescriptiontext">
    <h3 class="pdh">
      PRODUCT DESCRIPTION
    </h3>
    <p class="pdp">
      Our product is sternly checked on many parameters by professional quality inspectors to ensure its durable nature and fine finish.
      With finish that makes them stand out and give your space a lovely new luxurious look, you'll be sure to love it.
    <p class="pddetails">

      <span class="pddspan">Weight:</span> 201Kg
    </p>
    <hr class="pdhr">
    <p class="pddetails">
      <span class="pddspan">Dimension:</span> 205.5cm * 215cm * 650cm
    </p>
    <hr class="pdhr">
    <p class="pddetails">
      <span class="pddspan">Color:</span> Based on Request
    </p>
    <hr class="pdhr">
    <p class="pddetails">
      <span class="pddspan">Destribution:</span> Based on Request
    </p>
    <hr class="pdhr">
  </div>
  <div class="productdescriptionimg">
    <img class="pdi2" src="new image\modern-matte-lacquer-wardrobe-with-glass-door-yg-l02-1.jpg" alt="">
  </div>
  </div>

  <div class="relatedproducts">
    <h3 class="relatedproductshead">
      RELATED PRODUCTS
    </h3>
    <div class="relatedproductsimg">
      <div class="rtdbund">
        <img class="rtdimg" src="new image\bed.jpg" alt="">
        <a href="bed.php"class ="rtdanchor"><p class="rtdp">BED</p></a>
      </div>
      <div class="rtdbund">
        <img class="rtdimg" src="new image\dinning2.jpg" alt="">
      <a href="dinning.php"class ="rtdanchor">  <p class="rtdp">DINNING</p></a>
      </div>

      <div class="rtdbund">
        <img class="rtdimg" src="new image\kitchen-cabinets.jpg" alt="">
        <a href="kitchen2.php"class ="rtdanchor"><p class="rtdp">KITCHEN</p></a>
      </div>
      <div class="rtdbund">
        <img class="rtdimg" src="new image\sofa set 2.jpg" alt="">
      <a href="sofa.php"class ="rtdanchor"> <p class="rtdp">SOFA</p></a>
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

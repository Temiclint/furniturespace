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
      <img class="actualproductimg" src="new image\159809_1599502435.jpg" alt="">
      <div class="smallimages">
        <img class="smallimga" src="new image\sofaset.jpg" alt="">
        <img class="smallimga" src="new image\sofa set 2.jpg" alt="">

      </div>
    </div>
    <div class="pp product-title">
      <h3 class="ptt">
        SOFA
      </h3>
      <p class="ptp">
        Our Sofas comes in both leather and fabric forms with different variants
        settings and distribution. Our Sofas are highly comfortable, durable and
        asthetically pleasing. The Standard sofa selections can be 7 seaters (which)
        comes in the following distribution.
      <ul class="ptul">
        <li class="ptli"><i class="fas fa-chair"></i>1 Number of 3 seater</li>
        <li class="ptli">1 Number of 2 seater</li>
        <li class="ptli">2 Number of 1 seater</li>
      </ul>
      </p>
      <h3 class="ptprice">N 170,000</h3>
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
      If a single piece of furniture has the ability to define the style of a personal living space, that piece would be the sofa. Available in a range of styles -- with a variety of functions -- a sofa can be functional or whimsical, period or
      contemporary, single or sectional. In each instance the sofa, as a signature object, defines the space in which it sits.
    </p>
    <p class="pddetails">

      <span class="pddspan">Weight:</span> 57kg
    </p>
    <hr class="pdhr">
    <p class="pddetails">
      <span class="pddspan">Dimension:</span> 720cm * 90cm * 180cm
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
    <img class="pdi2" src="new image\sofaset3.jpg" alt="">
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
        <a href="kitchen.php"class ="rtdanchor"><p class="rtdp">KITCHEN</p></a>
      </div>
      <div class="rtdbund">
        <img class="rtdimg" src="new image\wardrobe.jpg" alt="">
      <a href="wardrobe.php"class ="rtdanchor"> <p class="rtdp">WARDROBE</p></a>
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

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
      <img class="actualproductimg" src="new image\dinning.jpg" alt="">
      <div class="smallimages">
        <img class="smallimga" src="new image\dinning2.jpg" alt="">
        <img class="smallimga" src="new image\dinsmall.jpg" alt="">

      </div>
    </div>
    <div class="pp product-title">
      <h3 class="ptt">
        DINNING SETS
      </h3>
      <p class="ptp">
        Check out our luxurious dinning chairs and table, made from the very
        best wood Available, treated and preserved and skillfully finished
        with the best hands. Convert your space to a wonderzone and have people
        always marved at the artisic wonder. <br>
        It can come with the following seats
      <ul class="ptul">
        <li class="ptli"><i class="fas fa-chair"></i>6 Chairs and a table</li>
        <li class="ptli">4 Chairs and a table</li>
        <li class="ptli">Based on Request</li>
      </ul>
      </p>
      <h3 class="ptprice">N 156,000</h3>
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
        Make your dining atmosphere as pleasant as possible with our six seats dining table. Dining table sets the overall mood of the space and our table will bring bright colors and positivity to your dining room. Crafted from high quality oak logs
        and coated with lacquer to preserve the timber, this table will last for decades and be of use to many generations.
        Create a warm dining ambiance with Soligna’s rectangular dining table.
      </p>
      <p class="pddetails">

        <span class="pddspan">Weight:</span> 67kg
      </p>
      <hr class="pdhr">
      <p class="pddetails">
        <span class="pddspan">Dimension:</span> 720cm * 90cm * 180cm
      </p>
      <hr class="pdhr">
      <p class="pddetails">
        <span class="pddspan">Material:</span> Wood
      </p>
      <hr class="pdhr">
      <p class="pddetails">
        <span class="pddspan">Destribution:</span> Based on Request
      </p>
      <hr class="pdhr">
    </div>
    <div class="productdescriptionimg">
      <img class="pdi2" src="new image\dinning.jpg" alt="">
    </div>
  </div>

  <div class="relatedproducts">
    <h3 class="relatedproductshead">
      RELATED PRODUCTS
    </h3>
    <div class="relatedproductsimg">
      <div class="rtdbund">
        <img class="rtdimg" src="new image\bed.jpg" alt="">
        <a href="bed.php" class="rtdanchor">
          <p class="rtdp">BED</p>
        </a>
      </div>
      <div class="rtdbund">
        <img class="rtdimg" src="new image\sofa set 2.jpg" alt="">
        <a href="sofa.php" class="rtdanchor">
          <p class="rtdp">SOFA</p>
        </a>
      </div>

      <div class="rtdbund">
        <img class="rtdimg" src="new image\kitchen-cabinets.jpg" alt="">
        <a href="kitchen.php" class="rtdanchor">
          <p class="rtdp">KITCHEN</p>
        </a>
      </div>
      <div class="rtdbund">
        <img class="rtdimg" src="new image\wardrobe.jpg" alt="">
        <a href="wardrobe.php" class="rtdanchor">
          <p class="rtdp">WARDROBE</p>
        </a>
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

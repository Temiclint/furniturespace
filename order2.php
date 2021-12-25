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
                <p class="placeorder-statement">
                    Place Your Order and Delivery Fast
                </p>
                <a href="index.php" class="viewgallerybtn"> View Gallery </a>
            </div>
            <img class="heroimg" src="new image\rastudio200700061-removebg-preview.png" alt="Heroes">
        </div>


    </div>
<!-- 
    <div class="orderdet">
        <div class="imgord">
            <img src="new image\<?php echo $_SESSION["productimage1"]; ?>" alt="" />
        </div>
        <div class="orddet">
            <h2> ITEM ORDERED:
                <?php echo $_SESSION['productname']; ?>
            </h2>

            <p>
                <?php echo $_SESSION['productprice']; ?>
            </p>

        </div>
    </div> -->
    <div class="order2wrapper">
        <form class="order2frm" method="post" action="saveorder.php">
            <h3 class="orderhead">Order Details</h3>

            <label class="order-label" for="fname">First Name</label><br>
            <input class="order-inpttext" type="text" name="fname" id="fname" required><br>

            <label class="order-label" for="lname">Last Name</label><br>
            <input class="order-inpttext" type="text" name="lname" id="lname" required><br>

            <label class="order-label" for="number">Mobile Number</label><br>
            <input class="order-inpttext" type="tel" name="number" id="number" required><br>

            <label class="order-label" for="Address">Detailed Address</label><br>
            <input class="order-inpttext" type="text" name="address" id="address" required><br>

            <label class="order-label" for="uemail">Email</label><br>
            <input class="order-inpttext" type="email" name="uemail" id="uemail" required><br>

            <label class="order-label" for="productname">Product Name</label><br>
            <input class="order-inpttext ro" type="text" name="productname"
                value="<?php echo $_SESSION["productname"]; ?>" readonly id="productname"><br>

            <label class="order-label" for="productprice">Product Price</label><br>
            <input class="order-inpttext ro" type="text" name="productprice"
                value="<?php echo $_SESSION["productprice"]; ?>" readonly id="productprice"><br>

            <a class="cancelorder btnorder" href="index.php">Cancel</a>

            <input class="placeorder btnorder" type="submit" value="Place Order">

        </form>
    </div>
    <!-- footer -->
    <?php 
  
  include 'footer.php';
  
  ?>

    <script src="https://use.fontawesome.com/e9156ceaca.js"></script>
    <script src="index.js"></script>
</body>


</html>
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
          Delete User record
        </p>
    
      </div>
      <img class="heroimg" src="new image\delete-file-3635146-3041092.png" alt="Heroes">
    </div>

  </div>

  <div class="productsection" id ="productgallery">
    <h2 class="product-heading">
      DELETE USER RECORD
    </h2>
   <h2 class="datetime">  
    <?php $create_date = date("Y-m-d H:i:s"); echo $create_date; ?> </span> </h2><hr class = "timeunderline" width="80%" />

    <form class="srcrecordfrm" action="deleteuconfirm.php" method="POST">
            <h3 class="orderhead" width='70%'>Delete</h3>
            <label for="usid" class="order-label">Enter User id</label><br>
            <input type="text" class="order-inpttext" name="usid" value=""><br>
            <input class="placeorder btnorder" type="submit" value="Search"> 
        </form>

        <?php 
  
  include 'footer.php';
  
  ?>
    <script src="https://use.fontawesome.com/e9156ceaca.js"></script>
    <script src="index.js"></script>
</body>


</html>
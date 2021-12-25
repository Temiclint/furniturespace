
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
                    Login </p>
                <a href="aboutus2.php" class="viewgallerybtn"> View Team </a>
            </div>
            <img class="heroimg contusherimg"
                src="new image\man-trying-to-login-in-his-account-3406108-2840402.png"
                alt="Heroes">
        </div>

    </div>
    <div class="getintouch">
        <form class="confrm" action="loginuser.php" method="POST">
            <h3 class="orderhead">Login</h3>
            <label for="name" class="order-label">Username</label><br>
            <input type="text" class="order-inpttext" name="usname" value=""><br>
            <label for="Email" class="order-label">Password</label><br>
            <input type="password" class="order-inpttext" name="uspassword" value=""><br>

    
            <p> Don't have an account?</p> 
            <a class="cancelorder btnorder" href="registerusers.php">Register</a>

            <input class="placeorder btnorder" type="submit" value="Login"> 
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
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
                    Admin Registration
                </p>
                <a href="index.php" class="viewgallerybtn"> View Gallery </a>
            </div>
            <img class="heroimg" src="new image\account-concept-illustration_114360-399-removebg-preview.png" alt="Heroes">
        </div>


    </div>

    </div>
    <div class="order2wrapper">
        <form  method="post" action="saveusers.php" class="confrm">
            <h3 class="orderhead">User Registration</h3>

            <label class="order-label" for="uname">User Name</label><br>
            <input class="order-inpttext" type="text" name="uname" id="uname" required><br>

            <label class="order-label" for="ufname">First Name</label><br>
            <input class="order-inpttext" type="text" name="ufname" id="ufname" required><br>

            <label class="order-label" for="ulname">Last Name</label><br>
            <input class="order-inpttext" type="text" name="ulname" id="ulname" required><br>

            <label class="order-label" for="uemail">Email</label><br>
            <input class="order-inpttext" type="email" name="uemail" id="uemail" required><br>

            <label class="order-label" for="uphonenumber">Phone Number</label><br>
            <input class="order-inpttext" type="text" name="uphonenumber" id="uphonenumber" required><br>

            <label class="order-label" for="upassword">Password</label><br>
            <input class="order-inpttext" type="password" name="upassword" required id="upassword" ><br>

            <label class="order-label" for="cpassword"> Confirm Password</label><br>
            <input class="order-inpttext" type="password" name="cpassword" required id="cpassword" ><br>

            <p> Already have an Account?</p>
            <a class="cancelorder btnorder" href="login.php">Login</a>

            <input type="submit" class="placeorder btnorder" value="Register">

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

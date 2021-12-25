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
          Get in touch with us
        </p>
        <a href="aboutus2.php" class="viewgallerybtn"> View Team </a>
      </div>
      <img class="heroimg contusherimg" src="new image\17-172542_writing-pen-clipart-transparent-hd-png-download-removebg-preview.png" alt="Heroes">
    </div>

  </div>
  <div class="getintouch">
    <form class ="confrm" action="mailto:temibrands@gmail.com">
      <h3 class ="conheadf">GET IN TOUCH WITH US</h3>
      <label for="name" class ="contactuslabels">Name</label><br>
      <input type="text" class ="contactusinput"name="name" value="" ><br>
      <label for="Email" class ="contactuslabels">Email</label><br>
      <input type="email" class ="contactusinput"name="name" value=""><br>
      <label for="Message" class ="contactuslabels">Message</label><br>
      <textarea name="Message" class ="contactusinput cnmsg"rows="8" cols="80"></textarea> <br>
      <div class ="cbtndv">
      <a class ="contact-submit"href="">Submit</a>
      </div>
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

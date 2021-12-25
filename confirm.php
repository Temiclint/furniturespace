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

<div class="row1">
        <h1 align="center"> Success Page </h1>
        <hr width="50%" size="2" color="black" />
		
        <?php	
			echo "<h2 class =  'error' align='center'>" . $_GET["message"] . "</h2>"; 
		?>




<?php 
  
  include 'footer.php';
  
  ?>

  <script src="https://use.fontawesome.com/e9156ceaca.js"></script>
  <script src="index.js"></script>
</body>


</html>
<?php 
session_start();
if (isset($_SESSION["name"])) {
	echo "Welcome ".$_SESSION['name'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ready for sell</title>
	<link rel="stylesheet" type="text/css" href="anish.css">

</head>
<body class="home">
	  <header>

        <div class="main">
        	  <div class="logo">
        	  	<a href="home.php"><img src="car-logo.jpg" id="log"></a>
        	 <ul>
        	 	 <li><a href="#">home</a></li>
        	 	  <li><a href="login.php">login</a></li>
        	 	  <li><a href="cardetails.php">car details</a></li>
        	 	  <li><a href="aboutus.php">about us</a></li>
        	 	  <li><a href="contactus.php">contact us</a></li>
        </div>

      
	   <div class="title">
	   	<h1>Car Dealer</h1>
	   	<h2>Welcome To Our Website</h2>
	   </div>
	   <div class="button">
	   	<a href="#" class="btn">WATCH VIDEO</a>
	   	<a href="#" class="btn">LEARN MORE</a>
	   </div>
    </header>
</body>
</html>
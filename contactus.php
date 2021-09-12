<?php
if(isset($_POST['submit']))
{
     $name=$_POST['name'];
     $email_id=$_POST['email'];
     $message=$_POST['message'];
     $conn=mysqli_connect('localhost','root','','register');
    if(!$conn)
    {
         echo "database is not connected";
    } 
    else
    {
        $sql="insert into contact_db(name,email_id,message)values('$name','$email_id','$message')";
        if(mysqli_query($conn,$sql))
        {
             echo"data inserted successfully";
        }
        else
        {
             echo"data not inserted".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ready for sell</title>
	<link rel="stylesheet" type="text/css" href="anish.css">

</head>
<body class="contactus">
	  <header>

        <div class="main">
        	  <div class="logo">
        	  	<a href="home.php"><img src="car-logo.jpg" id="log"></a>
        	 <ul>
        	 	 <li><a href="home.php">home</a></li>
        	 	  <li><a href="login.php">login</a></li>
        	 	  <li><a href="cardetails.php">car details</a></li>
        	 	  <li><a href="aboutus.php">about us</a></li>
        	 	  <li><a href="#">contact us</a></li>

        </div>
        <div class="loginim"><image src="regis03.png"style="width: 1000px;height:550px; "></div> 
        </header>

        <div class="box" id="contactbox">
            <div class="contact1">
            <h1 id="contactus">Contact Us<h1>
              <h2 style="font-size: 15px;">You can contact by message<h2>
                
        </div>
            <form action="contactus.php" method="POST">
                <input type="text" name="name" placeholder="Name"required><br><br>
                <input type="email" name="email" placeholder="E-mail Id"required><br><br><br>
                  <textarea name="message" placeholder="message" row="10" col="15"required></textarea><br>
                    <input type="submit" name="submit" value="submit">
            </form>
        </div>
	
    </body>
</html>
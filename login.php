<?php
session_start();
if(isset($_POST['submit']))
{
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $conn=mysqli_connect('localhost','root','','register');
  if(!$conn)
  {
     echo"database not connected";

  }
  else{
      $sql="select * from reg_list where Email='$user'and Password='$pass'";
      $query=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($query);
      if($count==1)
      {
         $row=mysqli_fetch_array($query);
         $_SESSION["uid"]=$row["Id"];
         $_SESSION["name"]=$row["Name"];
         header("location:home.php");

      }
      else{
         echo "<script>alert('Invalid Username or password');</script>";

      }
      mysqli_close($conn);

  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="anish.css">

</head>
<body class="login">
    
	  <header>

        <div class="main">
        	  <div class="logo">
        	  	<a href="home.php"><img src="car-logo.jpg" id="log"></a>
        	 <ul>
        	 	 <li><a href="home.php">home</a></li>
        	 	  <li><a href="#">login</a></li>
        	 	  <li><a href="cardetails.php">car details</a></li>
        	 	  <li><a href="aboutus.php">about us</a></li>
        	 	  <li><a href="contactus.php">contact us</a></li>
            </ul>
        </div>

	
    <div class="loginim"><image src="ani3.png"style="width:600px;height:250px;left:1%;top:30%;position: absolute; "></div> 
            <div class="loginim"><image src="ani5.png"style="width:600px;height:250px;left: 55%;top: 30%; position: absolute;"></div> 
    </header>

    <div class="box">
         <img src="loginimg.png" class="avatar">
           <h1> Please Login </h1>
             <form action="login.php"method="POST" id="formval" onsubmit="return validation()">
                <input type="text" name="user" placeholder="Email Id"><br>
                 <input type="password" name="pass" placeholder="Password"><br>
                  <input type="submit" name="submit" value="login"><br><br>
                   <a href="#">Forget password</a>
              </form>
             <span id="dhaa">Don't Have an Account</span><br> <a  id="reg"href="register.php">Register Here</a>
         
    </div>

    <script type="text/javascript">
        function validation() {
            var username=document.forms["formval"]["user"];
            var pass=document.forms["formval"]["password"];
            if (username.value=="") {
                alert("Username cannot be empty");
                return false;
            }
            if (pass.value=="") {
                alert("Password field is empty");
                return false;
            }
            return true;
        }
    </script>

</body>
</html>
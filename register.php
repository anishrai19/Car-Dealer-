<?php
if(isset($_POST['submit']))
{
  $name=$_POST['nam'];
  $email=$_POST['mail'];
  $mob_no=$_POST['mobile'];
  $address=$_POST['address'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
 $conn=mysqli_connect('localhost','root','','register');
 if(!$conn)
 {
  echo"connection not establish";
 } 
 else{
      $sql="insert into reg_list(Name,Email,Mobile_no,Address,Password,Gender) values('$name','$email','$mob_no','$address','$password','$gender')";
   if(mysqli_query($conn,$sql))
   {
    
    echo"<div>data inserted sucessfully.<div>";
   }   
   else
   {
    echo"data not inserted ".mysqli_error($conn);
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
<body class="register">
	  <header>

        <div class="main">
        	  <div class="logo">
        	  	<a href="home.php"><img src="car-logo.jpg" id="log"></a>
        	 <ul>
        	 	 <li><a href="home.php">home</a></li>
        	 	  <li><a href="login.php">login</a></li>
        	 	  <li><a href="cardetails.php">car details</a></li>
        	 	  <li><a href="aboutus.php">about us</a></li>
        	 	  <li><a href="contactus.php">contact us</a></li>
                </ul>
                 </div>
                </div>
              <div class="loginim"><image src="regis02.png"style="width:1000px;height:480px;left:1%;top:20%;position: absolute;"></div> 
        </header>
        <div class="box" id="regist">
         <img src="loginimg.png" class="avatar">
           <h1 id="tit"> Register Page </h1>
             <form action="register.php"method="POST"  id="form2" onsubmit="return validation()">
                <input type="text" name="nam" placeholder=" Name"><br>
                  <input type="email" name="mail" placeholder=" Email id"><br>
                   <input type="number" name="mobile" placeholder="Mobile No."><br><br>
                    <textarea name="address" placeholder="Address" rows="20" cols="30"></textarea><br>
                    <input type="password" name="password" placeholder=" Password"><br><br>
                    <div id="gende">gender:<input type="radio" value="male" name="gender" checked="checked">male 
                    <input type="radio" name="gender" value="female">female<br><br>
                    
            </div>
                    
                  <input type="submit" name="submit"value="Register"><br><br>   
              </form>
      </div>
      <script type="text/javascript">
        function validation() {
            var addre=document.forms["form2"]["address"];
            var email=document.forms["form2"]["mail"];
            var name=document.forms["form2"]["nam"];
            var user=document.forms["form2"]["username"];
            var pass=document.forms["form2"]["password"];
            var mob=document.forms["form2"]["mobile"];
            if (name.value=="") {
              alert("Name is empty");
              return false;
            }
            if(email.value==""){
              alert("email is not entered");
              return false;
            }
            if(addre.value==""){
              alert("Address is required");
              return false;
            }
            if(mob.value=="" || mob.value.length!=10){
              alert("Invalid Mobile No.");
              return false;
            }
            if (user.value=="") {
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

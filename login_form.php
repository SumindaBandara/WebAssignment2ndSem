<?php

$sever="localhost";
$username="root";
$pwd="";
$database="user_db";
$conn=new mysqli($sever,$username,$pwd,$database);

session_start();

if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

  

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

    $_SESSION['user_email'] = $row['email'];
         header('location:user_page.php');

      }
     
   else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thailand Tourism :Travel Guide</title>
<style>
h1
{
color: red;
    position: center;
}

body
	{
		background-image:url("images/Economy(1).jpg");
	    background-attachment: fixed;
		background-repeat: no-repeat;
		background-position: center;
        backface-visibility: hidden;
        
      
</style>
    <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
 <link rel="short icon" href="images/fav.png">

</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php"><img src="images/Thai12.png" alt="" width="200" height="50" class="rounded-circle"/></a>
  	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  	    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
  	      <ul class="navbar-nav mr-auto">
  	        <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
  	        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Attraction </a>
  	          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
				  <a class="dropdown-item" href="bangkok1.php">Bangkok</a> 
				  <a class="dropdown-item" href="pattaya.php">Pattaya</a>
  	           <a class="dropdown-item" href="phuket.php">Phuket</a> 
				  <a class="dropdown-item" href="krabi.php">Krabi</a> 
				 
				</div>
            </li>
			  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> About Thai </a>
  	          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
				  <a class="dropdown-item" href="economy.php">Economy</a> 
				  <a class="dropdown-item" href="culture.php">Culture</a>
  	           </div>
            </li>
			   <li class="nav-item"> <a class="nav-link" href="triptricks.php">Trip tricks</a> </li>
  	                  <li class="nav-item"> <a class="nav-link " href="aboutus.php">About us</a> </li>
          </ul>
		</div>
		   <div class="ml-auto">
             <a href="register_form.php" >
                                <button class="btn my-2 my-sm-0" type="submit">Booking Hotel&nbsp;</button>
								</a>
        </div>
      </nav>
<!-- body code goes here -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
<center>
<div class="form-container">
 <form action="" method="post">
      <h3><font color="white">login now</font></h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p><font color="white">don't have an account?</font> <a href="register_form.php">register now</a></p>
   </form>
</div>
</center>
<footer><div class="footer wow fadeIn" data-wow-delay="0.3s">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-3 col-xl-4">
<div class="footer-contact">
<br>
<h2>Destinations</h2>
<a href="bangkokcitytour.php"><font color="white">Bangkok Citry Tour</font></a><br>
<a href="4islandtour.php"><font color="white">4 Island Tour</font></a><br>
<a href="Floating Market Pattaya.php"><font color="white">Floating Market Pattaya </font></a><br>
<a href="Phi Phi Island Tour.php"><font color="white">Phi Phi Island Tour </font></a><br>
<a href="Sanctuary of Truth.php"><font color="white">Sanctuary of Truth </font></a><br>
<a href="Under Water World.php"><font color="white">Under Water World</font></a><br>

</div>
</div>
<div class="col-md-6 col-lg-3 col-xl-4">
<div class="footer-contact">
<br>
<h2>Thailand Tourism</h2>
	
<a href="Visa policy of Thailand.php"><font color="white">Visa policy of Thailand</font></a><br>
<a href="Travel guid.php"><font color="white">Travel guid</font></a><br>
	
	</div>
</div>

<div class="col-md-6 col-lg-3 col-xl-4">
<div class="footer-contact">
<br>
<h2>Contact</h2>
Address : B-150, First Floor,<br>
Sector-63 Noida-201301<br>
Call: +91 8810-691-022<br>
Email: thailandtourismoffice@gmail.com

</div>
</div>
<div class="container copyright">
	<br>
<br>
  <div class="row">
    <div class="col-lg-6">
		<p> 
			<br>
		    <br>
			<br>
		  </p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>All Right Reserved</p>
    </div>
    <div class="col-lg-6"><font align="right"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="images/logo.png" width="200" height="200" alt=" " class="rounded-circle"></font>	
<p class="text-justify"> <br>
  Thailand, one of the top tourist detentions for family, couple and friends.
You need to experience it to believe it.</p></div>
  </div>


</div>
</div>
</div>
</div>
</footer>
</body>
</html>
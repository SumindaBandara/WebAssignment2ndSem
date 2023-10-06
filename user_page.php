<?php

$sever="localhost";
$username="root";
$pwd="";
$database="user_db";
$conn=new mysqli($sever,$username,$pwd,$database);
session_start();

if(!isset($_SESSION['user_email'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thailand Tourism :Travel Guide</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css">
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
		<br>
		
          
            
  	<!-- body code goes here -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
 <br>
	  <h1><center>Hi ! Traveller</center></h1><br>
	  <h3 class="text-center">The Best Hotels to stay in Thailand</h3>
	<br>
	<br>
	  <div class="container">
<h4>Around Bankok </h4>
	  <br>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <div class="card col-md-4 col-lg-12"> <img src="images/Rainforest-1 (1).jpg" alt="Card image cap" width="538" height="300" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Mövenpick Hotel Sukhumvit 15 Bangkok</h5>
          <p class="card-text">Located in the heart of Bangkoks Central Business District. The hotels key features are its personalized service, and comfortably appointed accommodation with 363 rooms, surround lush tropical foliage replete with cascading waterfall, hanging gardens and an iconic central Plumier Lelawadee tree. Also featured is an elegant all day dining restaurant with live cooking station preparing beautiful Thai and international delicacies and a breathtaking rooftop bar and pool offering panoramic views over Bangkok.</p>
           <img src ="images/correct.jpg" width="20" height="20">In the heart of the business and commercial district.<br>
			<img src ="images/correct.jpg" width="20" height="20">Complimentary scheduled tuk tuk shuttle to Skytrain.<br>
			<img src ="images/correct.jpg" width="20" height="20">Rooftop pool and Rainforest rooftop bar.<br>
			<img src ="images/correct.jpg" width="20" height="20">Private access Executive Floor and lounge.<br>
			<img src ="images/correct.jpg" width="20" height="20">Extensive meeting and conference facilities.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
	  <br>
<a href="https://www.movenpickbangkoksukhumvit15.com/" class="btn btn-primary">More about</a> </div>
      </div>
   </div>
    <div class="col-lg-6">
      <div class="card col-md-4 col-lg-12"> <img src="images/SKYVIEW.jpg" alt="Card image cap" width="435" height="300" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">SKYVIEW Hotel Bangkok</h5>
          <p class="card-text">Welcome to SKYVIEW Hotel Bangkok, where the sky is the limit! Are you tired of the same old ordinary? Escape from the everyday normal and step into an incredible world of vibrancy at SKYVIEW Hotel Bangkok EM-District. Located in the city’s major fashion hub, our vibrant, design-forward hotel is the perfect urban escape for any traveler, conveniently located on Sukhumvit Soi 24.

From dancing the night away at MOJJO Rooftop Lounge &amp; Bar to sundowners at Vanilla Sky Bar, a leisurely All-You-Can-Eat A La Carte Buffet at Prime, or an opulent wedding in the SKY Ballroom, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
  <img src="images/correct.jpg" width="20" height="20">ROOMS &amp; SUITES <br>
  <img src="images/correct.jpg" width="20" height="20">DINING<br>
  <img src="images/correct.jpg" width="20" height="20">SERVICES &amp; FACILITIES<br>
  <img src="images/correct.jpg" width="20" height="20">EVENTS<br>
          </p>
          
<a href="https://skyviewhotel.com/bangkok/" class="btn btn-primary">More about</a> </div>
      </div>
    </div>
  </div>
</div>
		  </div>
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
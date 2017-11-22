
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>
JanmBhoomi
</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/newcss.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <style>
  #popup
  {
	  display:none;
  }

.carousel-inner{
  width:100%;
  max-height: 500px !important;
}
  .navbar-custom {
    background-color: #de4949;
	
}
.navbar-custom li:hover
 {
	background-color:#ffcccc;
}
.navbar-custom li:link
 {
	background-color:#b3e0ff;
}


  /* Smaller than standard 960 (devices and browsers) */
@media only screen and (max-width: 959px) {}

/* Tablet Portrait size to standard 960 (devices and browsers) */
@media only screen and (min-width: 768px) and (max-width: 959px) {}

/* All Mobile Sizes (devices and browser) */
@media only screen and (max-width: 767px) {}

/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
@media only screen and (min-width: 480px) and (max-width: 767px) {}

/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (max-width: 479px) {}
</style>
</head>
<body style="background-image:url('images/apjanmbhoomi.pngx')">
<nav  class="navbar navbar-default navbar-custom"> <!-- Just add this code to stuck nav at the top = data-spy="affix" data-offset-top="100" -->
	<div class="container-fluid">
	<button type="button" class="navbar-toggle" 
	data-toggle="collapse"
	data-target=".navbar-collapse">
	<span class="sr-only">Toggle Navigation </span>
	<span  class="icon-bar"></span>
	<span  class="icon-bar"></span>
	<span  class="icon-bar"></span>
	</button>
	<div class="navbar-collapse collapse" style="font-size:18px">
	<ul class="nav navbar-nav navbar-left"style="color:#ffffff;">
	<li><a href="index.php"style="color:#ffffff;">Home</a></li>
	<li><a href="adminlogin.php"style="color:#ffffff;">Admin Login</a></li>
	<li><a href="userlogin.php"style="color:#ffffff;">User Login</a></li>
	<li><a href="register.php"style="color:#ffffff;">Register</a></li>
	<li><a href="donate.php"style="color:#ffffff;">Donate</a></li>
	<li><a href="https://www.apjanmabhoomi.org/about-us/interns-team/" target="blank" style="color:#ffffff;">About Us</a></li>
	<li><a href="https://www.apjanmabhoomi.org/contact/" target="blank" style="color:#ffffff;">Contact</a></li>
	<?php if(isset($_SESSION['name'])){ ?><li><a href="logout.php">Logout </a></li><?php } ?>
	</ul>
	</div>
	</div>
	</nav>

	
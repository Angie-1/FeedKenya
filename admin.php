<?php
	include "conn/db_connect.php";

	if(!empty($_GET['message'])) {
    $message = $_GET['message'];

	}
	else{
		$message = '';
	}
?>
<html>
<head>
<title>FeedKenya : Donate to the Less Fortunate in Kenya</title>

<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
<div class="floating_header">
<div class="logo">
<img src="img/logo.png">
</div>
<ul class="main-nav">
<li><a href="index.php">Home</a></li>
<li><a href="">Gallery</a></li>
<li><a href="">About Us</a></li>
<li><a href="partners.php">Partners</a></li>
<li><a href="admin.php">Admin</a></li>

</ul>
</div>
<div class="hero">
<h1>Register. Login</h1>
<div class="button-awesome">
<a href="adminlogin.php"class="btn btn-full">Login</a>
</div>
</div>
</header>
<section class="feature">
<h3 class="text-center"> About Us</h3>
<p class="para">
FeedKenya connects nonprofits, donors, and companies in nearly every country around the world. We help local nonprofits access the funding, tools, training, and support they need to become more effective.</p>

 <div class="container">
 <div class="row">
 <div class="col-md-3">
 <h4>NonProfits</h4>
 <p class="arranging">
Nonprofits around the world apply and join FeedKenya to access more funding, to build new skills, and to make important connections.
 </p>
 </div>
  <div class="col-md-3">
  <h4>Donors</h4>
 <p class="arranging">
People like you give what you can to your favorite projects; you feel great when you get updates about how your money is put to work by trusted organizations.
 </p>
 </div>
  <div class="col-md-3">
  <h4>Companies</h4>
 <p class="arranging">
Generous companies and their employees further support high-impact projects, helping local communities thrive.
 </p>
 </div>
  <div class="col-md-3">
  <h4>Our Impact</h4>
 <p class="arranging">

Nonprofits have the funding they need to listen to feedback and try out new ways to work; communities all over the globe get more awesome!
 </p>
 </div>


 </div>

 </div>

</section>
<section class="mobile">
<h3 class="text-center">Use the login button</h3>
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="pic">
<img src="img/peep.jpeg">
</div>
</div>
<div class="col-md-6">
<div class="download">
	
	


</div>


</div>
</div>

</section>
<section class="partners">
<h3 class="text-center">Our Partners</h3>
<ul class="partner-logos">
<li>
<figure class="logo-img">
<img src="img/unicef.png">
</figure>
</li>
<li>
<figure class="logo-img">
<img src="img/redcross.png">
</figure>
</li>
<li>
<figure class="logo-img">
<img src="img/un.png">
</figure>
</li>

<li>
<figure class="logo-img">
<img src="img/rainrescue.png">
</figure>
</li>

<li>
<figure class="logo-img">
<img src="img/who.png">
</figure>
</li>



<li>
<figure class="logo-img">
<img src="img/beyond.png">
</figure>
</li>


<li>
<figure class="logo-img">
<img src="img/little.png">
</figure>
</li>

<li>
<figure class="logo-img">
<img src="img/safaricom.jpg">
</figure>
</li>

<li>
<figure class="logo-img">
<img src="img/equity.png">
</figure>
</li>

<li>
<figure class="logo-img">
<img src="img/airtel.png">
</figure>
</li>
</ul>
</section>


<section class="footer1">
<h3 class="text-center">Quick Links</h3>

 <div class="container">
 <div class="row">
 <div class="col-md-3">
 <h4>Company</h4>
 <li><a href="">About Us</a></li>
  <li><a href="">Products</a></li>
  <li><a href="">Our Services</a></li>

 </div>
  <div class="col-md-3">
  <h4>FeedKenya</h4>
<li><a href="">Our Partners</a></li>
   <li><a href="">Careers</a></li>
    <li><a href="">Blog</a></li>
 </div>
  <div class="col-md-3">
  <h4>Donors</h4>
 <li><a href="">Donate In Honor</a></li>
 <li><a href="">Start a Fundraiser</a></li>


 </div>
  <div class="col-md-3">
  <h4>Help</h4>
   <li><a href="">FAQ</a></li>
 <li><a href="">Twitter</a></li>
 <li><a href="">Facebook</a></li>
 </div>
 </div>

 </div>

</section>

<section class="footer2">
<table Border=0 align="" width="100%" height="20px">
<tr><td>
 <div class="footer" align="center">
      	<p>Copyright &copy; 2019 FeedKenya Inc<br>
      	A Product of Angela</p></font>
      </div>

</tr>
</tr></table>

</section>


</body>
</html>

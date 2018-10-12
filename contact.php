<!doctype html>

<?php
error_reporting(0);
session_start();
require_once("include/xFile.php");
?>

<html lang="en" class="no-js">
<head>
	<title><?=$vSiteName?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:300,400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
	
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<?php include("include/header.php"); ?>


		<!-- contact section 
			================================================== -->
		<section class="contact-section">
			<div class="container">
				<div class="col-md-8">
					<form id="contact-form">
						<h2>Send us a message</h2>
						<div class="row">
							<div class="col-md-4">
								<input name="name" id="name" type="text" placeholder="Name">
							</div>
							<div class="col-md-4">
								<input name="mail" id="mail" type="text" placeholder="Email">
							</div>
							<div class="col-md-4">
								<input name="tel-number" id="tel-number" type="text" placeholder="Phone">
							</div>
						</div>
						<textarea name="comment" id="comment" placeholder="Message"></textarea>
						<input type="submit" id="submit_contact" value="Send Message">
						<div id="msg" class="message"></div>
					</form>
				</div>
				<div class="col-md-4">
					<div class="contact-info">
						<h2>Contact Info</h2>
						<p>You can contact or visit us in our office from Monday to Friday from 8:00 - 19:00</p>
						<ul class="information-list">
							<li><i class="fa fa-map-marker"></i><span>Your Company Name JSC1332 Your Street,City World, US49 Chameleon, CA.</span></li>
							<li><i class="fa fa-phone"></i><span>+1 223 334 3434</span><span>+1 605-315-8544</span></li>
							<li><i class="fa fa-envelope-o"></i><a href="#">info@yourcompany.com</a></li>
						</ul>						
					</div>
				</div>
			</div>
		</section>
		<!-- End contact section -->

		<!-- subcribe-section 
			================================================== -->
		<section class="subcribe-section">
			<div class="container">
				<div class="title-section white">
					<h1>Subscribe to our news letter</h1>
				</div>
				<form class="subscribe">
					<input type="text" name="name-subs" id="name-subs" placeholder="name"/>
					<input type="text" name="email-subs" id="email-subs" placeholder="your email address"/>
					<input type="submit" id="submit-subscribe" value="subscribe"/>
				</form>
				<p>Please contact us if you want to do charity through the mailbox.</p>
			</div>
		</section>
		<!-- End subscribe section -->

		<?php include("include/footer.php"); ?>

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
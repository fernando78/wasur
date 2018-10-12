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
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<?php include("include/header.php"); ?>

		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Donations</h1>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- services section 
			================================================== -->
		<section class="services-section">
			<div class="services-box">

				<div class="container">
					<div class="row">

						<div class="col-md-9">
							<div class="row">

								<div class="col-md-6">
									<div class="services-post">
										<img src="upload/others/3.jpg" alt="">
										<div class="services-content">
											<h2><a href="#">Strategy plan</a></h2>
											<p>Aenean sed justo tincidunt, vulputate nisi sit amet, rutrum ligula. Pellentesque dictum aliquam ornare. Sed elit lectus.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. </p>
											<ul class="serv-links">
												<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
												<li><a href="#">Vestibulum auctor</a></li>
												<li><a href="#">Nunc dignissim risus id metus</a></li>
											</ul>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="services-post">
										<img src="upload/others/8.jpg" alt="">
										<div class="services-content">
											
											<h2><a href="#">Video Surveillance</a></h2>
											<p>Aenean sed justo tincidunt, vulputate nisi sit amet, rutrum ligula. Pellentesque dictum aliquam ornare. Sed elit lectus.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. </p>
											<ul class="serv-links">
												<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
												<li><a href="#">Vestibulum auctor</a></li>
												<li><a href="#">Nunc dignissim risus id metus</a></li>
											</ul>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="col-md-3">
							<div class="services-tabs">
								<ul>
									<li>
										<a href="services.html" >All Services</a>
									</li>
									<li class="active">
										<a href="services-single.html">Strategy</a>
									</li>
									<li>
										<a href="services-single.html">Financial plan</a>
									</li>
									<li>
										<a href="projecting.html">Business plan</a>
									</li>
									<li>
										<a href="energy.html">Oportunity advice</a>
									</li>
									<li>
										<a href="roads.html">Others</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				
			</div>
		</section>
		<!-- End services section -->

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
				<p>If you want to receive monthly updates from us just pop your <br> email in the box.</p>
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
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

		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Donations</h1>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- services-section 
			================================================== -->
		<section class="services-section">
			<div class="services-box">
				<div class="container">
					<div class="row">

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/1.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">Help & Support</a></h2>
									<p>Our Leadership workshops are key critical success factors for your program. Our Executive, Champion, Financial and HR Workshops, are specifically .</p>
									<ul class="serv-links">
										<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
										<li><a href="#">Vestibulum auctor</a></li>
										<li><a href="#">Nunc dignissim risus id metus</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/2.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">Adoption</a></h2>
									<p>Our Leadership workshops are key critical success factors for your program. Our Executive, Champion, Financial and HR Workshops, are specifically .</p>
									<ul class="serv-links">
										<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
										<li><a href="#">Vestibulum auctor</a></li>
										<li><a href="#">Nunc dignissim risus id metus</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/3.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">Volunteering</a></h2>
									<p>Our Leadership workshops are key critical success factors for your program. Our Executive, Champion, Financial and HR Workshops, are specifically .</p>
									<ul class="serv-links">
										<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
										<li><a href="#">Vestibulum auctor</a></li>
										<li><a href="#">Nunc dignissim risus id metus</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
					<div class="row">

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/8.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">School Based Programs</a></h2>
									<p>Our Leadership workshops are key critical success factors for your program. Our Executive, Champion, Financial and HR Workshops, are specifically .</p>
									<ul class="serv-links">
										<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
										<li><a href="#">Vestibulum auctor</a></li>
										<li><a href="#">Nunc dignissim risus id metus</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/9.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">Help Orphans</a></h2>
									<p>Our Leadership workshops are key critical success factors for your program. Our Executive, Champion, Financial and HR Workshops, are specifically .</p>
									<ul class="serv-links">
										<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
										<li><a href="#">Vestibulum auctor</a></li>
										<li><a href="#">Nunc dignissim risus id metus</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/10.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">Children Donors</a></h2>
									<p>Our Leadership workshops are key critical success factors for your program. Our Executive, Champion, Financial and HR Workshops, are specifically .</p>
									<ul class="serv-links">
										<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
										<li><a href="#">Vestibulum auctor</a></li>
										<li><a href="#">Nunc dignissim risus id metus</a></li>
									</ul>
								</div>
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
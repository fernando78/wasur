<!doctype html>

<?php
error_reporting(0);
session_start();
require_once("include/koneksi.php");
require_once("include/xFile.php");
require_once("include/encDec.php");
?>

<html lang="en" class="no-js">
<head>
	<title><?=$vSiteName?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
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
				<h1>Tentang Kami</h1>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- about section 
			================================================== -->
		<section class="about-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="about-post">
							<img src="upload/others/5.jpg" alt="">
							<h2>Tentang Kami 01</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="about-post">
							<img src="upload/others/4.jpg" alt="">
							<h2>Tentang Kami 02</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End about section -->

		<!-- choose section 
			================================================== -->
		<section class="choose-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<div class="accordion-box">
							<h1>Why choose us ?</h1>
							<p>Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. </p>
							<div class="accord-elem active">
								<div class="accord-title">
									<a class="accord-link" href="#">Mediation & Crisis Management</a>
								</div>
								<div class="accord-content">
									<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
								</div>
							</div>
							<div class="accord-elem">
								<div class="accord-title">
									<a class="accord-link" href="#">Adoption & Fostering</a>
								</div>
								<div class="accord-content">
									<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
								</div>
							</div>
							<div class="accord-elem">
								<div class="accord-title">
									<a class="accord-link" href="#">Taking Care Of Old People</a>
								</div>
								<div class="accord-content">
									<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
								</div>
							</div>

						</div>

					</div>

					<div class="col-md-6">
						<div class="banner-consult">
							<h1><span>Help multifarious people</span>with your little donation</h1>
							<p>Have an idea, a dream? We can make it happen.</p>
							<a href="#">Donate</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End choose section -->

		<!-- team-section 
			================================================== -->
		<section class="team-section">
			<div class="container">

				<div class="team-box owl-wrapper">
					<div class="owl-carousel" data-num="3">
					
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/1.jpg" alt="">

								<ul class="social-list">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>

							<div class="team-content">
								<h2>Besim Dauti</h2>
								<span>Company Menager</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>

						</div>
					
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/2.jpg" alt="">

								<ul class="social-list">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>

							<div class="team-content">
								<h2>John Smith</h2>
								<span>Architect</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>

						</div>
					
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/3.jpg" alt="">

								<ul class="social-list">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>

							<div class="team-content">
								<h2>Kenan Januzi</h2>
								<span>Krye shef</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>

						</div>
					
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/4.jpg" alt="">

								<ul class="social-list">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>

							<div class="team-content">
								<h2>Pajazit Hallaqi</h2>
								<span>Puntor shpine</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>

						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- End team section -->

		<?php include("include/footer.php"); ?>

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
</body>
</html>

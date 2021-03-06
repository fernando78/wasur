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
				<h1>Cerita</h1>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- blog section 
			================================================== -->
		<section class="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="blog-box">

							<div class="blog-post">
								<img src="upload/blog/1.jpg" alt="">
								<div class="post-content-text">
									<h2><a href="single-post.php">Donec odio. Quisque volutpat mattis eros.</a></h2>
									<span>22 Jannuary 2015</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<a href="single-post.php">Read More <i class="fa fa-angle-right"></i></a>
								</div>
							</div>

							<div class="blog-post">
								<img src="upload/blog/2.jpg" alt="">
								<div class="post-content-text">
									<h2><a href="single-post.php">Donec odio. Quisque volutpat mattis eros.</a></h2>
									<span>22 Jannuary 2015</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<a href="single-post.php">Read More <i class="fa fa-angle-right"></i></a>
								</div>
							</div>

							<div class="blog-post">
								<img src="upload/blog/4.jpg" alt="">
								
								<div class="post-content-text">
									<h2><a href="single-post.php">Hilton Prize Laureates Collaborative.</a></h2>
									<span>22 Jannuary 2015</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<a href="single-post.php">Read More <i class="fa fa-angle-right"></i></a>
								</div>
							</div>

							<div class="blog-post">
								<img src="upload/blog/3.jpg" alt="">
								<div class="post-content-text">
									<h2><a href="single-post.php">Central America Children Flee Violence.</a></h2>
									<span>22 Jannuary 2015</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<a href="single-post.php">Read More <i class="fa fa-angle-right"></i></a>
								</div>
							</div>

							<ul class="pagination-list">
								<li><a href="#" class="prev-pag">prev</a></li>
								<li><a href="#" class="active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#" class="next-pag">next</a></li>
							</ul>

						</div>
						
					</div>
					<div class="col-md-4">
						<div class="sidebar">

							<div class="category-widget widget">
								<h2>Categories</h2>
								<ul class="category-list">
									<li><a href="#">Donation <span>18</span></a></li>
									<li><a href="#">Education <span>06</span></a></li>
									<li><a href="#">Volunteer <span>12</span></a></li>
									<li><a href="#">Help & Support <span>15</span></a></li>
								</ul>
							</div>

							<div class="text-widget widget">
								<h2>Text Widget</h2>
								<div class="text-box">
									<p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
									<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
								</div>
							</div>

							<div class="archieve-widget widget">
								<h2>archieve</h2>
								<ul class="archieve-list">
									<li><a href="#">September 2014</a></li>
									<li><a href="#">Octomber 2014</a></li>
									<li><a href="#">November 2014</a></li>
									<li><a href="#">December 2014</a></li>
									<li><a href="#">Jannuary 2015</a></li>
								</ul>
							</div>

							<div class="tags-widget widget">
								<h2>TAG Widget</h2>
								<ul class="tags-list">
									<li><a href="#">Charity Fund</a></li>
									<li><a href="#">Membership</a></li>
									<li><a href="#">Volunteering</a></li>
									<li><a href="#">Parent Education</a></li>
									<li><a href="#">Help Orphans</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End blog section -->

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
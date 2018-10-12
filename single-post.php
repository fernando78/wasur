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
				<h1>Single post</h1>
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

							<div class="blog-post single-post">
								<img src="upload/blog/2.jpg" alt="">
								<div class="post-content-text">
									<h1>Consulting Procedure.</h1>
									<span>22 Jannuary 2015</span>
									<p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae.</p>
									<p>Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum tempor. Morbi non nibh sit amet ligula blandit ullamcorper in nec risus. Pellentesque fringilla diam faucibus tortor bibendum vulputate. Etiam turpis urna, rhoncus et mattis ut, dapibus eu nunc. Nunc sed aliquet nisi. Nullam ut magna non lacus adipiscing volutpat. Aenean odio mauris, consectetur quis consequat quis, blandit a nunc. Sed orci erat, placerat ac interdum ut, suscipit eu augue. Nunc vitae mi tortor. Ut vel justo quis lectus elementum ullamcorper volutpat vel libero.</p>
									<blockquote>
										<p>“ Class aptent taciti <span>sociosqu</span> ad litora torquent per conubia nostra, per inceptos himenaeos. <span>Nulla nunc dui</span>, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. ”</p>
									</blockquote>
									<p>Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum tempor. Morbi non nibh sit amet ligula blandit ullamcorper in nec risus. Pellentesque fringilla diam faucibus tortor bibendum vulputate. Etiam turpis urna, rhoncus et mattis ut, dapibus eu nunc. Nunc sed aliquet nisi. </p>
								</div>
							</div>
							<div class="autor-post">
								<img src="upload/team/4.jpg" alt="">
								<div class="autor-content">
									<h2>Besim Dauti</h2>
									<span>Architect</span>
									<p>Quisque ligulas ipsum, euismod vulputate iltricies etri elit. Class aptent taciti sociosqu litora torquent per conubia per himenaeos. Nulla tristique in semper</p>
								</div>
							</div>
							<div class="comment-section">
								<h2>4 Comments</h2>

								<ul class="comment-tree">
									<li>
										<div class="comment-box">
											<img alt="" src="upload/team/1.jpg">
											<div class="comment-content">
												<h4>Kenan Januzi <a href="#">Reply</a></h4>
												<span>Jann 23, 2015. 8:30 pm.</span>
												<p>Class aptent taciti sociosqu litora torquent per conubia per himenaeos. Nulla tristique in semper vel. Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. </p>
											</div>
										</div>
										<ul class="depth">
											<li>
												<div class="comment-box">
													<img alt="" src="upload/team/2.jpg">
													<div class="comment-content">
														<h4>John Doe <a href="#">Reply</a></h4>
														<span>Jann 23, 2015. 8:38 pm.</span>
														<p>Class aptent taciti sociosqu litora torquent per conubia per himenaeos. Nulla tristique in semper vel. </p>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="comment-box">
											<img alt="" src="upload/team/4.jpg">
											<div class="comment-content">
												<h4>Besim Dauti <a href="#">Reply</a></h4>
												<span>Jann 24, 2015. 8:00 am.</span>
												<p>Class aptent taciti sociosqu litora torquent per conubia per himenaeos. Nulla tristique in semper vel. Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. </p>
											</div>
										</div>
									</li>

								</ul>
								<form class="comment-form">
									<h2>Leave a Reply</h2>
									<input name="name" id="name" type="text" placeholder="Name (required)">
									<input name="mail" id="mail" type="text" placeholder="Email (required)">
									<input name="website" id="website" type="text" placeholder="Website">
									<textarea name="comment" id="comment" placeholder="Your Message (required)"></textarea>
									<input type="submit" id="submit_contact" value="Post Comment">
								</form>
							</div>
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="sidebar">

							<div class="category-widget widget">
								<h2>Categories</h2>
								<ul class="category-list">
									<li><a href="#">Architecture <span>18</span></a></li>
									<li><a href="#">Business <span>06</span></a></li>
									<li><a href="#">Finance <span>12</span></a></li>
									<li><a href="#">others <span>15</span></a></li>
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
									<li><a href="#">business</a></li>
									<li><a href="#">finance</a></li>
									<li><a href="#">architecture</a></li>
									<li><a href="#">study</a></li>
									<li><a href="#">others</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End blog section -->

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
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
	<div id="container">
		<?php include("include/header.php"); ?>

		<section class="page-banner-section">
			<div class="container">
				<h1>Yang Bisa Kamu Lakukan</h1>
			</div>
		</section>

		<section class="services-section">
			<div class="services-box">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="services-post">
								<img src="upload/others/5.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">WISATA</a></h2>
									<p>Our Leadership workshops are key critical success factors for your program. Our Executive, Champion, Financial and HR Workshops, are specifically .</p>
									<ul class="serv-links">
										<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
										<li><a href="#">Vestibulum auctor</a></li>
										<li><a href="#">Nunc dignissim risus id metus</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="services-post">
								<img src="upload/others/4.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">WISATA KHUSUS</a></h2>
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
						<div class="col-md-6">
							<div class="services-post">
								<img src="upload/others/5.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">PENELITIAN</a></h2>
									<p>Our Leadership workshops are key critical success factors for your program. Our Executive, Champion, Financial and HR Workshops, are specifically .</p>
									<ul class="serv-links">
										<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
										<li><a href="#">Vestibulum auctor</a></li>
										<li><a href="#">Nunc dignissim risus id metus</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="services-post">
								<img src="upload/others/4.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">VOLUNTER</a></h2>
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

		<?php include("include/footer.php"); ?>

	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
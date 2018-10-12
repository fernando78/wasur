<!doctype html>

<?php
error_reporting(0);
session_start();
require_once("include/koneksi.php");
require_once("include/xFile.php");
require_once("include/encDec.php");

if (fDec($_REQUEST['pMsg'])=="OUT") {
	session_unset();
	session_destroy();
	print "<script language='javascript'>alert('TERIMA KASIH, telah menggunakan aplikasi ini.');</script>";
	print "<script language='javascript'>location.href='index.php'</script>";
	}
elseif (fDec($_REQUEST['pMsg'])=="ERR") {
	session_unset();
	session_destroy();
	print "<script language='javascript'>alert('MOHON MAAF, SESI ANDA TELAH HABIS, silahkan LOGIN kembali.');</script>";
	print "<script language='javascript'>location.href='index.php'</script>";
	}
?>

<html lang="en" class="no-js">
<head>
	<title><?=$vSiteName?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="css/layers.css">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="css/navigation.css">

	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
		
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
		(Load Extensions only on Local File Systems !  
		The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>

	<script type="text/javascript" src="js/script.js"></script>
	<style>
  	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
    	width: 100%;
      	margin: auto;
  	}
  	</style>
</head>
<body>

	<!-- Container -->
	<div id="container">
		<?php include("include/header.php"); ?>

		<?php if ($_SESSION['sUserID']!="" AND $_REQUEST['pPage']!="") { ?>
		<div class="container">
			<?php include("page/".fDec($_REQUEST['pPage']).".php"); ?>
		</div>
		<?php } else { ?>

		<!-- upload/slide/3.jpg -->
		<!-- home-section 
		================================================== -->
		<section id="home-section" class="slider1">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
  					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  					<li data-target="#myCarousel" data-slide-to="1"></li>
  					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
  					<div class="item active">
    					<img src="upload/slide/1.jpg">
    					<div class="carousel-caption">
      						<h1>Intro 01</h1>
      						<h4>Intro 01 Taman Nasional Wasur</h4>
    					</div>
  					</div>

  					<div class="item">
    					<img src="upload/slide/2.jpg">
    					<div class="carousel-caption">
      						<h1>Intro 02</h1>
      						<h4>Intro 02 Taman Nasional Wasur</h4>
    					</div>
  					</div>

  					<div class="item">
    					<img src="upload/slide/3.jpg">
    					<div class="carousel-caption">
      						<h1>Intro 03</h1>
      						<h4>Intro 03 Taman Nasional Wasur</h4>
    					</div>
  					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		<!-- End home section -->

		<section class="team-section">
			<div class="container">
				<div class="title-section">
					<h1>Berita</h1>
				</div>
				<div class="team-box owl-wrapper">
					<div class="owl-carousel" data-num="3">
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/1.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Berita 01</h2>
								<span>Topik Berita 01</span>
								<p>Ringkas Berita 01</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/2.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Berita 02</h2>
								<span>Topik Berita 02</span>
								<p>Ringkas Berita 02</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/3.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Berita 03</h2>
								<span>Topik Berita 03</span>
								<p>Ringkas Berita 03</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/4.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Berita 04</h2>
								<span>Topik Berita 04</span>
								<p>Ringkas Berita 04</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="team-section">
			<div class="container">
				<div class="title-section">
					<h1>Cerita</h1>
				</div>
				<div class="team-box owl-wrapper">
					<div class="owl-carousel" data-num="3">
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/1.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Cerita 01</h2>
								<span>Topik Cerita 01</span>
								<p>Ringkas Cerita 01</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/2.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Cerita 02</h2>
								<span>Topik Cerita 02</span>
								<p>Ringkas Cerita 02</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/3.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Cerita 03</h2>
								<span>Topik Cerita 03</span>
								<p>Ringkas Cerita 03</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/4.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Cerita 04</h2>
								<span>Topik Cerita 04</span>
								<p>Ringkas Cerita 04</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="team-section">
			<div class="container">
				<div class="title-section">
					<h1>Event</h1>
				</div>
				<div class="team-box owl-wrapper">
					<div class="owl-carousel" data-num="3">
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/1.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Event 01</h2>
								<span>Topik Event 01</span>
								<p>Ringkas Event 01</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/2.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Event 02</h2>
								<span>Topik Event 02</span>
								<p>Ringkas Event 02</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/3.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Event 03</h2>
								<span>Topik Event 03</span>
								<p>Ringkas Event 03</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/4.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Event 04</h2>
								<span>Topik Event 04</span>
								<p>Ringkas Event 04</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="team-section">
			<div class="container">
				<div class="title-section">
					<h1>Foto Atraksi</h1>
				</div>
				<div class="team-box owl-wrapper">
					<div class="owl-carousel" data-num="3">
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/1.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Atraksi 01</h2>
								<span>Topik Atraksi 01</span>
								<p>Ringkas Atraksi 01</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/2.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Atraksi 02</h2>
								<span>Topik Atraksi 02</span>
								<p>Ringkas Atraksi 02</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/3.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Atraksi 03</h2>
								<span>Topik Atraksi 03</span>
								<p>Ringkas Atraksi 03</p>
							</div>
						</div>
						<div class="item team-post">
							<div class="gallery-team">
								<img src="upload/team/4.jpg" alt="">
							</div>
							<div class="team-content">
								<h2>Judul Atraksi 04</h2>
								<span>Topik Atraksi 04</span>
								<p>Ringkas Atraksi 04</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>

		<?php include("include/footer.php"); ?>

	</div>
	<!-- End Container -->

	<!-- Revolution slider -->
	<script type="text/javascript">
		var tpj=jQuery;							
		var revapi66;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_66_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_66_1");
			}else{
				revapi66 = tpj("#rev_slider_66_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"js/",
					sliderLayout:"fullwidth",
					dottedOverlay:"none",
					gridheight:600,
					gridwidth:1140,
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "vertical",
							drag_block_vertical: false
						},
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 778,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
					},
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		});	/*ready*/
	</script>
</body>
</html>
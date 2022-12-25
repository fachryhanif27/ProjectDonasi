<?php
session_start();

if (isset($_SESSION["login"])) {
	header("location: home.php");
	exit;
}

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>web_donasi</title>

	<!-- Styles -->
	<link rel='stylesheet' href='assets/css/bootstrap.min.css'>
	<link rel='stylesheet' href='assets/css/animate.min.css'>
	<link rel='stylesheet' href="assets/css/font-awesome.min.css" />
	<link rel='stylesheet' href="assets/css/style.css" />

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link rel="icon" href="assets/img/brand/box2.png" type="image/png">
</head>

<body>
	<!-- Begin Hero Bg -->
	<div id="parallax">
	</div>
	<!-- End Hero Bg
		================================================== -->
	<!-- Start Header
		================================================== -->
	<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Your Logo -->
				<a href="#hero" class="navbar-brand">DO <span class="lighter">NASI</span></a>
			</div>
			<!-- Start Navigation -->
			<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
				<ul class="nav navbar-nav">
					<li>
						<a href="#hero">Home</a>
					</li>
					<li>
						<a href="#gallery">Gallery</a>
					</li>
					<li>
						<a href="#about">About</a>
					</li>
					<li>
						<a href="#contactarea">Contact</a>
					</li>
					<li>
						<a href="login.php"><img src="assets/img/icons/png/100-log-in.png" width="30" alt="login"></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Intro
		================================================== -->
	<section id="hero" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="herotext">
						<h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s"> <span class="lighter"></span></h1>
						<p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
							"Jangan pernah lupa untuk selalu bersyukur. Dan berbagi adalah salah satu cara untuk bersyukur atas nikmat-Nya."
						</p>
						<p>
							<a href="donasi.php" class="btn btn-default btn-lg wow fadeInLeft" role="button"> DONASI </a> &nbsp;
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c" style=" background-color: aliceblue; ">
		<div class="container">
			<div class="col-lg-12 ">

				<h3> </h3>
				<div class="col-md-4 position-relative">
					<div class="p-3 text-center">
						<a href="zakat.php"><img src="assets/img/icons/give.png" alt="zakat" width="100"></a>
						<h5 class="mt-5">Zakat</h5>
					</div>
					<hr class="vertical dark">
				</div>
				<div class="col-md-4 position-relative">
					<div class="p-3 text-center">
						<a href="Infaq.php"><img src="assets/img/icons/donation.png" alt="zakat" width="100"></a>
						<h5 class="mt-5">Infaq</h5>
					</div>
					<hr class="vertical dark">
				</div>
				<div class="col-md-4 position-relative">
					<div class="p-3 text-center">
						<a href="sodaqoh.php"><img src="assets/img/icons/assistance.png" alt="zakat" width="100"></a>
						<h5 class="mt-5">Sodaqoh</h5>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<!-- Gallery
		================================================== -->
	<section id="gallery" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/2.jpg);">
		<div class="wrapsection">
			<div class="parallax-overlay" style="background-color:#00c1c1;opacity:0.9;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 sol-sm-12">
						<div class="maintitle">
							<h3 class="section-title">Events Gallery</h3>
							<p class="lead wow flipInX">
								Beberapa kumpulan foto kegiatan yang kami laksanakan
							</p>
						</div>
					</div>

					<div class="col-md-4">
						<a href="assets/img/main/g1.jpg" title="This is the description">
							<img src="assets/img/main/g1.jpg" alt="" class="image-responsive">
							<div class="description">
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/main/g2.jpg" title="This is the description">
							<img src="assets/img/main/g2.jpg" alt="" class="image-responsive">
							<div class="description">
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/main/g3.jpg " title="This is the description">
							<img src="assets/img/main/g3.jpg" alt="" class="image-responsive">
							<div class="description">
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/main/g4.jpg" title="This is the description">
							<img src="assets/img/main/g4.jpg" alt="" class="image-responsive">
							<div class="description">
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/main/g6.jpg" title="This is the description">
							<img src="assets/img/main/g6.jpg" alt="" class="image-responsive">
							<div class="description">
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/main/g7.jpg" title="This is the description">
							<img src="assets/img/main/g7.jpg" alt="" class="image-responsive">
							<div class="description">
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Text Carousel
		================================================== -->
	<section id="slider" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/4.jpg);">
		<div class="wrapsection">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="Carousel" class="carousel slide">
							<ol class="carousel-indicators">
								<li data-target="#Carousel" data-slide-to="0" class="active"></li>
								<li data-target="#Carousel" data-slide-to="1"></li>
								<li data-target="#Carousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<blockquote>
										<p class="lead">
											Berbagi bukan tentang seberapa besar dan seberapa berharganya hal yang kau beri, namun seberapa tulus dan ikhlasnya apa yang ingin kau beri
										</p>
									</blockquote>
								</div>
								<div class="item">
									<blockquote>
										<p class="lead">
											Dalam hidup ini, berbagi kepada sesama memberi jiwa rasa damai. Berbagi dengan tulus tanpa pamrih memberikan perasaan suka cita
										</p>
									</blockquote>
								</div>
								<div class="item">
									<blockquote>
										<p class="lead">
											Dengan berbagi, kamu tak akan pernah kekurangan. Dan saat yang tepat untuk berbagi adalah saat kamu dalam kekurangan.
										</p>
									</blockquote>
								</div>
							</div>
							<a class="left carousel-control" href="#Carousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#Carousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About
		================================================== -->
	<section id="about" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/1.jpg);">
		<div class="wrapsection">
			<div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Title -->
						<div class="maintitle">
							<h3 class="section-title"><strong>ABOUT <span class="lighter">US</span></strong></h3>
							<p class="lead">
								Kami Disini Menyediakan Halaman Untuk Anda Berbagi Dan Bersedekah Kepada Orang Yang Membutuhkan
							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<img src="assets/img/main/g5.jpg" alt="">
							<h3>Berbagi Bersama</h3>
							<div class="text-left">
								<p>
									Acara Berbagi Bersama Untuk berbagi makanan kepada seapa saja yang mau
								</p>

							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<span class="glyphicon glyphicon-stats"></span>
							<h3>5.386 Participants</h3>
							<p>
								Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
							</p>
							<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
							<span class="glyphicon glyphicon-tree-deciduous"></span>
							<h3>195 Concerts</h3>
							<p>
								Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
							</p>
							<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
							<span class="glyphicon glyphicon-heart"></span>
							<h3>268 Sponsors</h3>
							<p>
								Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
							</p>
							<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.4s">
							<span class="glyphicon glyphicon-usd"></span>
							<h3>$5.647 Donated</h3>
							<p>
								Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
							</p>
							<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Random
		================================================== -->
	<section class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/3.jpg);">
		<div class="wrapsection">
			<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 sol-sm-12">
						<div class="maintitle">
							<h3 class="section-title justtitle">Kata - Kata Bijak</h3>
							<p class="lead bottom0 wow bounceInUp">
								Berikanlah sedekah! Karena sedekah itu ibarat sungai yang mengalir. Kamu hanya akan terus memperoleh manfaat dari air bersihnya."
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact
		================================================== -->
	<section id="contactarea" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/map.png);">
		<div class="wrapsection">
			<div class="parallax-overlay" style="background-color: #1cbb9b;opacity:0.95;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="maintitle">
							<h3 class="section-title">Kritik & Saran</h3>
							<p class="lead">
								Jika Ada Saran Dan Pertanyaan Silakan Tulis Pada Form Di Bawah
							</p>
						</div>
						<form id="contact" name="contact" method="post" class="text-left">
							<fieldset>
								<div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
									<label for="message">Pesan<span class="required">*</span></label>
									<textarea name="message" id="message" required></textarea>
								</div>
								<div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
									<input id="submit" type="submit" name="submit" value="Kirim" />
								</div>
							</fieldset>
						</form>
						<div id="success">
							<p class="contactalert">
								Pesan Anda Berhasil Di Kirim
							</p>
						</div>
						<div id="error">
							<p class="contactalert">
								Something went wrong, try refreshing and submitting the form again.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Credits 
	=============================================== -->
	<section id="credits" class="text-center">
		<span class="social wow zoomIn">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-skype"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
		</span><br />
		Copyright &copy; 2022 <a href="#">Tim Tugas APPL</a>
	</section>
	<!-- Bootstrap core JavaScript
		================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/jquery.localScroll.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/common.js"></script>
</body>

</html>
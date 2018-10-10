<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="...">
		<meta name="keywords" content="...">
		<meta name="author" content="...">
		<title>CZSale - Classified Ads Website</title>
		<link rel="stylesheet" href="assets/css/CZSale.css" type="text/css" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container wrapper">
			<!-- INCLUDE HEADER FILE -->
			<?php require_once('includes/header.php'); ?>
			<div class="row content">
				<div class="col-lg-3 content-left">
					<!-- INCLUDE CATEGORIES FILE -->
					<?php require_once('includes/categories.php'); ?>
				</div>
				<div class="col-lg-9 content-right">
					<div class="hidden-xs hidden-sm">
						<h4>Featured</h4>
						<div class="featured">
							<a href="#"><img src="assets/img/slides/slide-00.jpg" /></a>
							<a href="#"><img src="assets/img/slides/slide-01.jpg" /></a>
							<a href="#"><img src="assets/img/slides/slide-02.jpg" /></a>
						</div>
					</div>
					<h4>Recommended</h4>
					<div class="row selected-classifieds">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail">
								<a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
								<div class="caption">
									<h5><a href="#">Samsung Galaxy S4</a></h5>
									<p class="price">550 EUR</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail">
								<a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
								<div class="caption">
									<h5><a href="#">Vizio 60" Slim Frame 3D</a></h5>
									<p class="price">370 EUR</strong></p>                 
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail">
								<a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
								<div class="caption">
									<h5><a href="#">Logitech 2.1 HS-263</a></h5>
									<p class="price">36 EUR</strong></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail">
								<a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
								<div class="caption">
									<h5><a href="#">Apple McBook Pro</a></h5>
									<p class="price">740 EUR</strong></p>                    
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail">
								<a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
								<div class="caption">
									<h5><a href="#">Adidas Blake 46"</a></h5>
									<p class="price">55 EUR</strong></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail">
								<a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
								<div class="caption">
									<h5><a href="#">Card reader MobileLite G2</a></h5>
									<p class="price">10 EUR</strong></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail">
								<a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
								<div class="caption">
									<h5><a href="#">Electonics toolkit (40 pieces)</a></h5>
									<p class="price">28 EUR</strong></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
							<div class="thumbnail">
								<a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
								<div class="caption">
									<h5><a href="#">Nokia Lumia 800</a></h5>
									<p class="price">185 EUR</strong></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- INCLUDE FOOTER FILE -->
			<?php require_once('includes/footer.php'); ?>
		</div>
		<!-- JavaScript -->
		<script src="assets/js/jquery-1.11.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.slides.min.js"></script>
		<script src="assets/js/CZSale.js"></script>
	</body>
</html>
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
					<ol class="breadcrumb">
						<li><a href="index-2.html">Home</a></li>
						<li><a href="addClassified.html">Add classified</a></li>
					</ol>
					<h2>Add classified</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet porta eros, eget facilisis arcu. Duis condimentum fermentum enim, ac rutrum erat venenatis vel. Morbi pharetra viverra faucibus.</p>
					<hr>
					<form role="form">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Classified sections</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="section1">Main section</label>
									<select id="section1" class="form-control">
										<option selected="selected">Select section</option>
										<option>Books</option>
										<option>Cameras & Photo</option>
										<option>Cell Phones & Accessories</option>
										<option>Clothing, Shoes & Accessories</option>
										<option>Computers & Networking</option>
										<option>DVDs & Movies</option>
										<option>Health & Beauty</option>
										<option>Music</option>
										<option>Toys & Hobbies</option>
									</select>
								</div>
								<div class="well">
									<label>Extra sections</label>
									<div class="checkbox" style="margin-top: 0;">
										<label><input type="checkbox"> Featured list (+ 12 EUR)</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox"> Recommended list (+ 6 EUR)</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox"> Advertising in search results (+ 6 EUR)</label>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Classified details</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="type">Type</label>
									<select id="type" class="form-control">
										<option selected="selected">Select type</option>
										<option>Offer</option>
										<option>Demand</option>
									</select>
								</div>
								<div class="form-group">
									<label for="category">Category</label>
									<select id="category" class="form-control">
										<option value="0" selected="selected">Select category</option>
										<option value="1">DVD, Blu-ray devices</option>
										<option value="32">GPS navigations</option>
										<option value="4">Graphics cards</option>
										<option value="5">Hard drives</option>
										<option value="25">Game controllers</option>
										<option value="30">Games</option>
										<option value="27">Coolers</option>
										<option value="7">Printers</option>
										<option value="9">LCD screens</option>
										<option value="2">Modems</option>
										<option value="26">MP3 players</option>
										<option value="10">Notebooks</option>
										<option value="12">PC, Computers</option>
										<option value="13">Processors</option>
										<option value="14">Network devices</option>
										<option value="17">Software</option>
										<option value="24">Tablets, E-readers</option>
										<option value="28">Wireless, WiFi</option>
										<option value="19">Motherboards</option>
										<option value="22">Other</option>
									</select>
								</div>
								<div class="form-group">
									<label for="heading">Heading</label>
									<input type="text" class="form-control" id="heading" placeholder="eg. Apple iPad mini 32GB Wi-Fi + Cellular 1 Year Warranty">
								</div>
								<div class="form-group">
									<label for="text">Text</label>
									<textarea id="text" class="form-control" rows="8"></textarea>
								</div>
								<div class="form-group">
									<label>Price</label>
									<div class="form-inline">
										<div class="form-group">
											<div class="input-group" style="width: 150px;">
												<input type="text" class="form-control" id="price">
												<span class="input-group-addon">EUR</span>
											</div>
										</div>
										<div class="form-group">
											<p class="form-control-static" style="padding: 0 10px;">or</p>
										</div>
										<div class="form-group">
											<select id="price-other" class="form-control">
												<option value="0" selected="selected">Select alternative pricing</option>
												<option value="1">By deal</option>
												<option value="2">By offer</option>
												<option value="3">Exchange</option>
												<option value="4">For free</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="zip">Zip code</label>
									<input type="text" class="form-control" id="zip" style="width: 150px;">
								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Classified images</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label>Select images</label>
									<input type="file" id="image1">
									<input type="file" id="image2">
									<input type="file" id="image3">
									<input type="file" id="image4">
									<input type="file" id="image5">
								</div>
								<div class="form-group">
									<label for="video">Video (YouTube embed code)</label>
									<div class="input-group">
										<input type="text" class="form-control" id="video">
										<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Your personal details</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="userName">Your name</label>
									<input type="text" class="form-control" id="userName">
								</div>
								<div class="form-group">
									<label for="userPhone">Phone</label>
									<input type="text" class="form-control" id="userPhone">
								</div>
								<div class="form-group">
									<label for="userEmail">E-mail</label>
									<input type="email" class="form-control" id="userEmail">
								</div>
								<div class="form-group">
									<label for="userPass">Password</label>
									<input type="password" class="form-control" id="userPass">
								</div>
							</div>
						</div>
						<div class="well">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet porta eros, eget facilisis arcu. Duis condimentum fermentum enim, ac rutrum erat venenatis vel. Morbi pharetra viverra faucibus.</p>
							<div class="checkbox">
								<label><input type="checkbox" checked="checked"> Sign Up for Newsletter</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox"> I agree to the <a href="#">Terms of Use</a></label>
							</div>
							<button type="button" class="btn btn-success">Preview & Save</button>
						</div>
					</form>
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
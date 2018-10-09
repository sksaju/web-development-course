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
						<li><a href="index.php">Home</a></li>
						<li><a href="signUp.php">Sign Up</a></li>
					</ol>
					<h2>Sign Up</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet porta eros, eget facilisis arcu. Duis condimentum fermentum enim, ac rutrum erat venenatis vel. Morbi pharetra viverra faucibus.</p>
					<hr>
					<div class="row">
						<div class="col-lg-12">
							<div class="well">
								<form action="#" method="post" role="form">
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6 col-md-6">
												<input class="form-control" name="firstname" placeholder="First name" type="text" required autofocus />
											</div>
											<div class="col-xs-6 col-md-6">
												<input class="form-control" name="lastname" placeholder="Last name" type="text" required />
											</div>
										</div>
									</div>
									<div class="form-group">
										<input class="form-control" name="youremail" placeholder="Your email" type="email" />
									</div>
									<div class="form-group">
										<input class="form-control" name="password" placeholder="New password" type="password" />
									</div>
									<div class="form-group">
										<input class="form-control" name="reenterpassword" placeholder="Re-enter new password" type="password" />
									</div>
									<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up!</button>
								</form>
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
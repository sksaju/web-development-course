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
						<li><a href="contact.php">Contact</a></li>
					</ol>
					<h2>Contact</h2>
					<div class="row">
						<div class="col-md-8">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3153.33730031349!2d-122.40063970000001!3d37.78213429999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807e0fbb1b7b%3A0x9b0401f7786f9a39!2s795+Folsom+St%2C+San+Francisco%2C+CA+94107%2C+Spojen%C3%A9+st%C3%A1ty+americk%C3%A9!5e0!3m2!1scs!2scz!4v1412057873232" frameborder="0" style="border: none; width: 100%; height: 400px;"></iframe> 
						</div>
						<div class="col-md-4">
							<div class="well well-sm">
								<address>
									<strong>Doe's Sales, Inc.</strong><br />
									795 Folsom Ave, Suite 600<br />
									San Francisco, CA 94107<br />
									<abbr title="Phone">P:</abbr> (123) 456-7890
								</address>
								<address>
									<strong>John Doe</strong><br />
									<a href="mailto:#">john.doe@example.com</a>
								</address>
							</div> 
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body">                
									<form action="#" method="POST">
										<div class="form-group">
											<label for="InputEmail">Email address</label>
											<input type="email" class="form-control" id="InputEmail" placeholder="Enter your email">
										</div>
										<div class="form-group">
											<label for="InputSubject">Subject</label>
											<input type="email" class="form-control" id="InputSubject" placeholder="Enter your subject">
										</div>
										<div class="form-group">
											<label for="InputText">Your text</label>
											<textarea class="form-control" id="InputText" name="message" placeholder="Type in your message" rows="5" style="margin-bottom:10px;"></textarea>
										</div>
										<button class="btn btn-info" type="submit">Send</button>
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
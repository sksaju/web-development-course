<!doctype html>
<html>
	<head>
		<title>Pyramid</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width-device-width" initial-scale="1"/>
		<style>
			.fancy {
				width: 600px;margin: 100px auto;padding: 50px;border: 1px solid #999; color: #666; border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="fancy">
			<form action="Pyramid.php" method="POST" style="margin-bottom:10px;">
				<input type="text" name="pyramid_length" placeholder="Enter pyramid length" style="width:200px;">
				<button type="submit">Submit </button>
			</form>
			<!-- Start PHP Program -->
			<?php
				/*echo '<pre>';
				print_r($_POST);*/
				$pyramid_length = @$_POST['pyramid_length'];
				
				if(!empty($pyramid_length)) {
					for($i=1;$i<=$pyramid_length; $i++) {
						for($j=1; $j<=$i; $j++) {
							if($j==$i) {
								echo $j;
							} else {
								echo '* ';
							}
						}
						echo '<br>';
					}
				}
			?>
			<!-- End PHP Program -->
		</div> 
	</body>
</html>
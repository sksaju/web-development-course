<!doctype html>
<html>
	<head>
		<title>Switch case</title>
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
			<form action="" method="POST" style="margin-bottom:10px;">
				<input type="text" name="number" placeholder="Enter a number" style="width:200px;">
				<button type="submit">Submit </button>
			</form>
			<hr>
			<!-- Start PHP Program -->
			<?php
				$number = $_POST['number'];
				switch($number) {
					case 5:
						echo "Case ".$number." is matched in 1";
						break;
					case 10:
						echo "Case ".$number." is matched in 2";
						break;
					case 15:
						echo "Case ".$number." is matched in 3";
						break;
					case 20:
						echo "Case ".$number." is matched in 4";
						break;
					default: 
						echo "Case ".$number." not found";
						break;
				}
			?>
			<!-- End PHP Program -->
		</div> 
	</body>
</html>
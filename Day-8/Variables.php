<!doctype html>
<html>
	<head>
		<title>Variables</title>
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
			<!-- Start PHP Program -->
			<?php
				$string = "Hello World";
				$number1 = 570;
				$number2 = 520;
				$boolean = TRUE;

				echo $string.'</br>';
				echo $number1+$number2.'</br>';
				echo $boolean.'</br><hr>';

				echo var_dump($string).'</br>';
				echo var_dump($number1+$number2).'</br>';
				echo var_dump($boolean);
			?>
			<!-- End PHP Program -->
		</div> 
	</body>
</html>

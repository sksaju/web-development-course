<!doctype html>
<html>
	<head>
		<title>Object</title>
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
				$person =  new stdClass();

				$person->name = "Sagor Biswas";
				$person->age = 10;
				$person->gender = "Male";
				$person->phone = 8801758901402;
				$person->institute = "Daffodil International Institute";

				echo '<pre>';
				print_r($person);
				echo '<hr>';

				echo 'The name of the person is '. $person->name;

			?>
			<!-- End PHP Program -->
		</div> 
	</body>
</html>
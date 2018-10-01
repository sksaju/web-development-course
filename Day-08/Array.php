<!doctype html>
<html>
	<head>
		<title>Arrays</title>
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
				$names = array('Name1', 'Name2', 'Name3', 107); //array is a function that make array variable

				echo $names[0].'<br>';

				echo '<pre>';
				var_dump($names); //var_dump is a function that returns all details regararding the parameters;
				echo '<hr>';

				print_r($names); //print_r is a function that returns index and value of array/object;
				echo '<hr>';

				$phone_numbers = array(8801720101010, 8801920101010, 8801620101010);
				$names = array('Name1', 'Name2', 'Name3', $phone_numbers, 'Name4', 'Name5');
				print_r($names);
				echo '<hr>';

				$person = array(
								'name' => 'Shimul',
								'age' => 12,
								'phone_numbers' => $phone_numbers,
								'gender' => 'Male', 
								'institute' => 'Daffodil International Institute'
							);
				print_r($person);
				echo '<br>';

				echo 'The name of the person is '. $person['name'];
				echo '<hr>';

				$name_array = ['Name1', 'Name2', 'Name3', 107];
				$name_array[3] = 'Name4';
				print_r($name_array);
			?>
			<!-- End PHP Program -->
		</div> 
	</body>
</html>
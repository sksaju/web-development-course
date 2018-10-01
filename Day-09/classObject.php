<?php 
	class Car {
		function Car() {
			$this->brand = "BMW";
			$this->model = "2012";
		}
	}
	
	
	$car = new Car();
	
	echo $car->brand." ".$car->model;


?>
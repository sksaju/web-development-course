<?php

Class Person {

	public $name;
	public $age;

	public function setData($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	public function displayData() {
		echo "Person name is {$this->name} and age is {$this->age} <br/>";
	}
}

$person = new Person();
$person->setData("Sagor", 10);
$person->displayData();

$person2 = new Person();
$person2->setData("Rahim", 10);
$person2->displayData();


?>
<?php

Class Person {

	public $name;
	public $age;
	public static $department;

	public const USER_ID = '152-15-6666';

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
		self::$department = "CSE";
	}

	public function displayData() {
		echo "Person name is {$this->name} and age is {$this->age} and userid is " . Person::USER_ID . "<br/>";
	}

	public static function showName($name) {
		echo "Person name is {$name} <br/>";
	}

	public function __destruct() {
		echo "<br/> This is destruct function";
	}

}

$person = new Person("John Doe", 100);
$person->displayData();

echo Person::$department. "<br/>";
echo Person::showName("Sakib al hasan"). "<br/>";

?>
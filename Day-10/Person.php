<?php 
class Person {
	
	public $name;
	public $age;

	public function personName() {
		echo "Person name is: ".$this->name."<br>";
	}

	public function personAge($age) {
		echo "Person age is: ".$this->age = $age;
	}
}


$person = new Person();

$person->name = "John Doe";

$person->personName();

$person->personAge(18);


?>
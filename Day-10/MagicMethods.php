<?php 

/*
	__get($property);
	__set($property, $value);
	__call($method, $arg_array);

*/


class Student {

	public $name;

	public static function describe() {
		echo "I am a student.<br/>";
	}

	public function __get($param) {
		echo "{$param} doesn't exist.<br/>";
	}

	public function __set($param, $value) {
		echo "We set $param->$value.<br/>";
	}

	public function __call($param, $value) {
		echo "There is no <b>{$param}</b> method and Arguments: ".implode(', ', $value);
	}

}


$student = new Student();
$student->describe();

$student->Hasan;
$student->age = 15;
$student->NotExistMethod(1, 2, 3);


?>
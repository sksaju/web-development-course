<?php 
abstract class Student {

	public $name;
	public $age;

	public function details() {
		echo "{$this->name} is {$this->age} years old <br/>";
	}

	abstract public function school();
}

class Boy extends Student {

	public function describe() {
		return parent::details(). "And i am a high school student <br/>";
	}

	public function school() {
		return "I like to read story book";
	}
}


$s = new Boy();
$s->name = "Kamal";
$s->age = "18";

echo $s->describe();
echo $s->school();

?>
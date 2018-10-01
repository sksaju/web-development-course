<?php 
interface School {
	public function mySchool();
}

interface Varsity {
	public function myVarsity();
}

class Student implements School, Varsity {

	public function __construct() {
		$this->mySchool();
		$this->myVarsity();
	}

	public function mySchool() {
		echo "I am a school student </br>";
	}

	public function myVarsity() {
		echo "I am a varsity student";
	}
}


$student = new Student();


?>
<?php 
class UserData {

	public $user;
	public $id;

	public function __construct($user, $id) {
		$this->user = $user;
		$this->id = $id;
	}

	public function display() {
		echo "Username is: {$this->user} and user id is: {$this->id}";
	}
}

class Admin extends UserData {

	public $level;

	public function display() {
		echo "Username is: {$this->user} and user id is: {$this->id} and level is {$this->level}";
	}
}


$userData = new UserData("John Doe", "101");
$userData->display();
echo "<br/>";

$admin = new Admin("Admin", "25");
$admin->level = "Administrator";
$admin->display();


?>
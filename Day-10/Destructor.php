<?php 
class UserData {
	
	public $user;
	public $id;

	public function __construct($user, $id) {
		$this->user = $user;
		$this->id = $id;

		echo "Username name is: {$this->user} and user id is: {$this->id}";
	}

	public function __destruct() {
		unset($this->user);
		unset($this->age);
	}
}


$userData = new UserData("John Doe", "101");



?>
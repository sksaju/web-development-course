<?php 
class UserData {

	public $user;
	public $id;
	const NAME = "Shazahan Kabir Saju";
	public static $age = 20;


	public function __construct($user, $id) {
		$this->user = $user;
		$this->id = $id;

		echo "Username is: {$this->user} and user id is: {$this->id}";
	}


	public static function display() {
		echo "Full name is: ".UserData::NAME."<br/>";
		echo "Age is: ".self::$age;
	}

	public function __destruct() {
		unset($this->user);
		unset($this->id);
	}
}


$userData = new UserData("John Doe", "101");
echo "<br/>";
UserData::display();



?>
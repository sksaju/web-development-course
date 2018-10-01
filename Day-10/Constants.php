<?php 
class UserData {

	public $user;
	public $id;
	const NAME = "Shazahan Kabir Saju";

	public function __construct($user, $id) {
		$this->user = $user;
		$this->id = $id;

		echo "Username is: {$this->user} and user id is: {$this->id}";
	}


	public function display() {
		//echo "Full name is: ".$this::NAME;
		//echo "Full name is: ".self::NAME;
		echo "Full name is: ".UserData::NAME;
	}

	public function __destruct() {
		unset($this->user);
		unset($this->id);
	}
}


$userData = new UserData("John Doe", "101");
echo "<br/>";
$userData->display();



?>
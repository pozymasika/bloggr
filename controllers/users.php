<?php
// class to hold user login infomation
class users {
	var $user_name;
	var $email;

	public function login($username, $password) {
		$this->username = $username;
		$this->password = $password;
	}

	public function register($user_name, $passwd) {
		$this->username = $username;
		$this->email    = $email;
		$this->password = $password;
	}
}

// object instantiation

?>
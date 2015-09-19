<?php
// class to hold user login infomation
class Users {
	private $b;
	public function __construct(PDO $db) {
		$this->db = $db;
	}
	public function login($username, $password) {
			try {
				$sql = "SELECT username,password FROM users WHERE username=:username AND password=:password LIMIT 1";
				$conn = $this->db->prepare($sql);
				$conn->execute(array(
					':username' => $username,
					':password' => hash('SHA256',$password)
				));

				$results = $conn->fetchColumn();
				if($results) {
					return true;
				}
			} catch(PDOException $e) {
				return $e->getMessage();
			}
			return false;
	}

	public function register($user_name, $passwd) {
			try {
				$sql ="INSERT INTO users(username,password) VALUES(:username,:password)";
				$conn = $this->db->prepare($sql);
				$results = $conn->execute(array(
					':username' => $user_name,
					':password' => hash('SHA256',$passwd)
				));

				if($results) {
					return true;
				}
			} catch(PDOException $e) {
				return $e->getMessage();
			}
			return false;
	}

}

/**
include_once('../config.php');
$usr = new Users($db);
print_r($usr->login('pozy','password'));
**/
?>

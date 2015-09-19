<?php
// Collecting user info for the fist time 
// and registering their accounts
include 'users.php';
include '../config.php';
if(isset($_POST)) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$usr = new Users($db);

	try {

		$is_correct = $usr->register($username, $password);
		if($is_correct) {
			echo "Details Correct.";
		} else  {
			echo "Wrong details";
		}
	}

	catch (PDOException $e) {
		echo $e->getMessage();
	}

}
?>
<?php
session_start();
// Collecting the user infomation 
// and checking the boolean value
include 'users.php';
include '../config.php';

if(isset($_POST)) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$usr = new Users($db);

	try {
		$is_correct = $usr->login($username, $password);
		var_dump($is_correct);
		if($is_correct) {
			$_SESSION['username'] = $username;
			 header("Location: ../templates/home_page.html.php");
		} else {
			echo "Wrong details.";
		}
	}

	catch(PDOException $e) {
		echo $e->getMessage();
	}
}

	

?>
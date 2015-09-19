<?php
// Collecting the user infomation 
// and checking the boolean value
include '/controlers/users.php';

if(isset(_GET['login'])) {
	if($userName === $user_name) {

		// Run the SQL to login the user
		// the user to their accounts.

	} else {
		$error = "You are not a registered user.";
		include '/templates/error.html.php';
		exit();
	}

	// The user can now access acoount specific infomation
}

?>
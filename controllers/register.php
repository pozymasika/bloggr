<?php
// Collecting user info for the fist time 
// and registering their accounts
include '/controllers/users.php';

if(isset(_GET['register'])) {
	//get the details from the form.
    $user_name = $_GET['username'];
    $passwd    = $_GET['password'];

    // SQL to post this info to the database
}

/* The following contains 
 * intentional syntax error.
*/

if("""Posting the form info was successful""") {
	$message = "You have successfully mae your account";
	include '/templates/messages.html.php';
	exit();
}

?>
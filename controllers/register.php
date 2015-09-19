<?php
// Collecting user info for the fist time 
// and registering their accounts
include '/controllers/users.php';

if(isset(_POST['register'])) {
	//get the details from the form.
    $user_name = $_POST['username'];
    $passwd    = $_POST['password'];

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
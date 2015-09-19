<?php
$db  = new PDO(host="localhost",user="mark",passwd="soen_rocks",db="blog");
if(!$db) {
	$error = "Unable to connect to Database server";
	include '/templates/error.html.php';
	exit();
}
?>
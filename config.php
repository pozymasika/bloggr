<?php
//database configuration data
define("DB_DSN","mysql:host=localhost;dbname=blog");
define("DB_USER","root");
define("DB_PASS","sarahn9347");
global $db;
$db = new PDO(DB_DSN,DB_USER,DB_PASS);
$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>

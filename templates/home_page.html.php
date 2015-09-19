<?php 
  session_start();
  if(!isset($_SESSION['username'])) {
  	header("Location: ../controllers/login.html.php");
  }
?>
<!doctype html>
<html>
<head>
	<title>Blog It! - Home page</title>
	<link href="/styles/homepage.css" type="text/css" rrel="stylesheet"/>
</head>
<body>
    <header>
       <p>Welcome to Blog It Simple <?php echo $_SESSION['username']; ?></p>
	   <!-- The menus  and links fall in this category -->
	   <!-- The header then follows -->
	</header>
	<p>
	    This is where you get to express it free and freely!<br>
	</p> 
	<footer>
	    <a href="../controllers/logout.php">logout</a>
		<p>Blog It Simple Copyright 2015 - 2015</p>
	</footer>
</body>
</html>
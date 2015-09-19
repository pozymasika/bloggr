<?php 
  session_start();
  if(!isset($_SESSION['username'])) {
  	header("Location: ../controllers/login.html.php");
  }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Blog It! - Home page</title>
	<link href="../styles/homepage.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <header>
<<<<<<< HEAD
       <p>Welcome to Blog It Simple <?php echo $_SESSION['username']; ?></p>
	   <!-- The menus  and links fall in this category -->
	   <!-- The header then follows -->
	</header>
=======
       <nav>
				<li>
					<a href="#">home</a>
				</li>
				<li>
					<a href="#">Blog</a>
				</li>
				<li>
					<a href="#">About us</a>
				</li>
			 </nav>
		</header>
>>>>>>> 21111146a21fd6c0bdea861f87fd077432b12faa
	<p>
	    This is where you get to express it free and freely!<br>
	</p>
	<footer>
	    <a href="../controllers/logout.php">logout</a>
		<p>Blog It Simple Copyright 2015 - 2015</p>
	</footer>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Login to blog simple</title>
	<link href="/styles/login.css" type="text/css" rel="stylesheet"/>
</head>
<body>
     <p>Welcome to bloggr</p>
     <table>
     	<tr>
     		<td>
     		<form method="POST" action="../controllers/login.php" name="login">
      		 <input class="form" type="text" name="username" placeholder="username"><br>
      		 <input  class="form" type="password" name="password" placeholder="password"><br>
      		 <input type="submit" value="submit" name="submit"><br>
            </form>
     		</td>
     	</tr>
     </table>

</body>
</html>
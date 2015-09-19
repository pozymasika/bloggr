<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Login to Blog it Simple</title>
	<link href="/style/form.css" type="text/css"  rel="stylesheet" />
</head>
<body>
    <p>Creating an account</p>
    <table>
      <tr>
      	<td>Please ensure that you fill in all the spaces.</td><hr>
      </tr>

      <tr>
       <td>

       <!-- Sending data from use to /controller/register.php -->

      	<form method="POST" action="../controllers/register.php" name="register">
      		<input class="form" type="text" name="username" placeholder="username"><br>
      		<input  class="form" type="password" name="password" placeholder="password"><br>
      		<input type="submit" value="submit" name="submit"><br>
        </form>
       </td>
      </tr>
    </table>
</body>
</html>
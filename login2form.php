
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web-sec</title>
</head>

<body>

<form action="login.php" method="POST">
	<h3>Accunt not verified</h3>
	<input type="text" placeholder="Enter a username" name="uname" value= "<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE['uname']; } ?">><br><br>
	<input type="password" placeholder="Enter password" name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>"><br><br>
	<button type="submit" name="login">Login</button><br><br>
	<p><input type="checkbox" name="remember" checked="checked"> Remember me</p><br>
   <p> I do not have an account?  <a href="signupForm.php">Sign Up</a> </p>

</form>
</body>
</html>

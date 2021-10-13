

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web App</title>
</head>
<body>
<style type="text/css">
		body{
			padding: 0;
			margin: 0;
			background: url('crime.jpg') no-repeat;
			background-size: cover;
		}
		.form{
			font-family: 'Roboto',sans-serif;
			position: relative;
			z-index: 1;
			background: #ffffff;
			opacity: 99%;
			max-width: 260px;
			margin: 200px auto 100px;
			padding: 10px 45px 30px 45px;
			text-align: center;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5PX 0 rgb(0, 0, 0,0.24);
			border-width: 10px;


 }

 .form P{
 	font-size:15PX;
 	padding: center;
 	padding: 1px;
 	text-align: center;
 }

 .form input{
 	outline: 0px;
 	padding:10px
 	border-radius: 10px;
 	background: #f2f2f2;
 	width: 100%;
 	border: 0;
 	margin: 0 0 15px;
 	padding:15px ;
 	box-sizing: border-box;
 	font-size: 14px ;

}

.form input:hover{
	background-color:D3F8F9;
	transition: all is ease 0s;

}
.form input:focus{
	background-color:#D3F8F9 ;
	transition: all is ease 0s;


}
.form button{
	text-transform: uppercase;
	outline: 0;
	border-radius: 10px;
	background:black;
	width: 100%;
	color: 14px;
	border:0;
	padding: 15px;
	color: #ffffff;
	font-size: 14px;
	cursor: pointer;


}
.form button:hover, .form button:active, .form button:foccus{
	background-color: #06c5cf;
	transition: great 0s;
}

@media (max-width: 700px){
	.form{
	font-size: 90px;
}
</style>

<form action="signupForms.php" method="POST" class="form
">
<h2>Create your account now</h2>
	<input type="text" name="fname" required="required" placeholder="First name"><br><br>
	<input type="text" name="lname" required="required" placeholder="Last name"><br><br>
	<input type="email" name="email" required="required" placeholder="Email"><br><br>
	<input type="text" name="uname" required="required" placeholder="Username"><br><br>
	<input type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" name="psw" required placeholder="Password"><br><br>
	<button type="submit" name="signup">SignUp</button><br><br>
   <p> got an account already?  <a href="adminLogin.php">Log in</a> </p>
</form>
</body>
</html>
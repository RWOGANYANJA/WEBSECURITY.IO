<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>welome</title>

	<style type="text/css">
	*{

		padding: 0;
		padding: 0;

	}	
.wrap{
	width: 117px;
	margin: auto;


}
header{
	background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('crimes.jpg');
	height: 100vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center;
	position: relative;


}
.nav-area{
	float: right;
	list-style: none;
	margin-top: 30px;



}
.nav-area li{
	display: inline-block;
	
	


}
.nav-area li a{
	color: #fff;
	text-decoration: none;	
	padding: 5px 20px;
	font-family: poppins;
	font-size: 14px;


	


}
.nav-area li a:hover{
	background: #fff;
	color: #333;


}
.logo img{
	width: 100px;
	float: left;
	height: auto;



}

.welcome-text{
	position: absolute;
	width: 600px;
	height: 300px;
	margin: 20% 30%;
	text-align: center;
	color: darkcyan;

	
}
.welcome-text h1{
		text-align: center;
		color: #fff;
		text-transform: uppercase;
		font-size: 60px;
		color: #fff;
}
.welcome-text a{
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: #fff;
   
}
.welcome-text h1:hover{
	background: #fff;
	color: #333;
}
.welcome-text a:hover{
	background: #fff;
	color: #333;
}

@media (max-width: 700px){
	.wraper{
	font-size: 10px;
}



	</style>
</head>
<body>
	<header>
		<div class="wraper">
			<div class="logo">
				<img src="logo1.jpg"> 

				
			</div>
			<ul class="nav-area">
				<li><a href="aboutuss.php">About us</li>
                <li><a href="contact.php">contact us</li>
			    <li><a href="request.php">Report crime</li>
			    <li><a href="index.php">Admin</li>
			   
			</ul>
		</div>
		<div class="welcome-text">
			<h1>investigators</h1>
			<a href="SignForm.php">report to us </a>
		</div>
	</header>

</body>
</html>
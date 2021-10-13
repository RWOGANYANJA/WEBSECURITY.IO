<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="vewport" content="width=device-width,initial-scale=1.0">
	<title>CONTACT US</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">


	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,500;1,700&display=swap');
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Poppins",sans-serif;
		}
		body{

			min-height: 100vh;
			background: url('crimes.jpg') no-repeat;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;

		}
		.content-section{
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.content-info{
			color: #fff;
			max-width: 500px;
			max-height: 65px;
			line-height: 65px;
			padding-left: 50px;
			font-size: 18px;


		}
		.contact-info i{
			margin-right:20px;
			font-size: 25px;

		}
		.contact-form{
			max-width: 700px;
			margin-right: 50px;


		}
		.contact-info, .contact-form{
			flex: 1;

		}
		.contact-form h2{
			color: #fff;
			text-align: center;
			font-size: 35px;
			text-transform: uppercase;
			 margin-bottom: 30px;

		}

		.contact-form .text-box{
			background: #000;
			color:none;
			border: none;
			width: calc(50% -10px);
			height: 50%;
			padding: 12px;
			font-size: 15px;
			border-radius:5px;
			box-shadow: 0 1px 1px rgb(0,0,0,0.1);
			margin-bottom: 20px;
			opacity: 0.9;


 }
 .contact-form .text-box: first-child{
 	margin-right: 15px;

}
.contact-form textarea{
	background:#000;
	color: #fff;
	border :none;
	width: 100%;
	padding: 12px;
	font-size:15px;
	min-height: 200px;
	min-height: 400px;
	resize: vertical;
	border-radius: 5px;

	box-shadow: 0 1px 1px rgb(0, 0, 0,0.1);
	border-radius: 5px;
	margin-bottom: 20px;
	opacity: 0.9;


}

.contact-form .send-btn{
	float:right;
	background: #2E94E3;
	color:#fff;
	border: none;
	width: 120px;
	height: 40px;
	font-size: 15px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 2px;
	border: 5px;
}
.contact-form .send-btn:hover{
	background: #0582E3;

}
.alert{
	z-index: 1;
	background: white;
	font-size: 18px;
	padding: 40px 40px;
	min-width: 420px;
	position: fixed;
	right: 0;
	top: 10px;
	border-left: 8px solid #3AD66E;
	border-radius: 4px;


}
@media screen and(max-width: 950px){
.contact-section{
	flex-direction: column;

}
.contact-info, .contact-form{
	margin: 30px;

}
.contact-form h2{
	font-size:30px ;
}
contact-form .text-box{
	width: 100%;

}

}

	</style>


</head>
<body>





	

<div class="content-section">
	<div class="content-info">
		<div><i class="fas fa-map-marker-alt"></i>Remera,kigali,Rwandda</div>
		<div><i class="fas fa-map-marker-alt"></i>rwoganyanjaserge@gmail.com<br>/kasinepenina@gmail.com</div>
		<div><i class="fas fa-phone"></i>+250 78656426</div>
		<div><i class="fas fa-clock">Mon-Sunday 8:00 AM to 5:00 PM</i></div>
		
	</div>
	<div class="contact-form">
		<h2>Contact us</h2>
		<form class="contact" action="https://formspree.io/f/mayapedl" method="post">
			<input type="email" name="email" class="text-box" placeholder="your email" required>
			<textarea name="message" rows="5" placeholder="your message"></textarea>
			<input type="submit" name="name" class="send-btn" value="send">



			
		</form>

	</div>
	
</div>

</body>
</html>
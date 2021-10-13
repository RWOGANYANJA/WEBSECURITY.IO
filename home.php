<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>

</body>
</html>


<?php 
session_start();
if (!isset($_SESSION['name'],$_SESSION['pass'])) {
   header("location:index.php");
}
$uname=$_SESSION['name'];
$pwd=$_SESSION['pass'];

 echo "<center><a href=index.php>HOME</a> &nbsp;&nbsp;&nbsp; <a href=service.php>SERVICE</a> &nbsp;&nbsp;&nbsp; <a href=contact.php>CONTACT US</a> &nbsp;&nbsp;&nbsp; <a href=logout.php>LOGOUT</a> </center>";
            echo "<p>Kevin Mitnick likely holds the title as the world’s best hacker ever. Kevin Mitnick started hacking at an early age. He broke into the realm of public attention in the 1980s after he hacked into the North American Defense Command (NORAD). These events would inspire the movie War Games. Two other hacking instances propelled Mitnick to be the number one hacker of all time. First, in 1989, he hacked into Digital Equipment Corporation (DEC) to make copies of their software. </p>";  
            echo "<center><img src='hacker.jpg'></center>"; 
             echo "<h3><center>Cookies Set Successfuly</h3></center>";

 ?>
<?php
include 'database.php';
session_start();
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pwd=sha1($_POST["pwd"]);
$_SESSION['em']=$email;
$_SESSION['code']=$code;
$code=mt_rand(100000,999999);
$status="not verified";

$sql="insert into student (fname,lname,email,uname,pwd,confirmationcode,status) values(?,?,?,?,?,?,?)";
    $to=$email;
    $from="From: rwoganyanjaserge@gmail.com";
    $subject="Verification Code for serge Website";
    $message =$otp;
  
    $mailing = mail($to,$subject,$message,$from);
$st=mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($st,$sql))
{
	header('location:verify.php');

//echo "<script> alert('successful check your email!!!!')</script>";
//echo "<script>location.href='signupForm.php'</script>";
///mysqli_stmt_bind_param($st,"sssss",$fname,$lname,$email,$uname,$pwd,$code,$status);
//mysqli_stmt_execute($st);
}
else{

echo "error:".$sql."<br>".$conn->error;

}

$conn->close();
?>
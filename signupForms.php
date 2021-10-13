<?php
include 'database.php';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pwd=sha1($_POST["pwd"]);
$sql="insert into student (fname,lname,email,uname,pwd) values(?,?,?,?,?)";

$st=mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($st,$sql))
{
echo "<script> alert('successful check your email!!!!')</script>";
echo "<script>location.href='signupForm.php'</script>";
mysqli_stmt_bind_param($st,"sssss",$fname,$lname,$email,$uname,$pwd);
mysqli_stmt_execute($st);
}
else{

echo "error:".$sql."<br>".$conn->error;

}

$conn->close();
?>
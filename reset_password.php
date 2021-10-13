<?php 
if (isset($_POST['signup'])) {
	$selector=$_POST['selectors'];
  $a=0;
	//$validator=$_POST['validator'];
	$password=$_POST['password'];
	$newpasswordrepeat=$_POST['password2'];
	if (empty($password) || empty($newpasswordrepeat)) {
		header("location:update.php");
		
	}
	else if ($password!=$newpasswordrepeat) {
    echo '<script language="javascript">';
echo 'alert("Emails have been stored");';
echo "\n";

header("location:update.php");
echo '</script>';

exit();
  
	}
	//$currentdate=date("U");
	require "database.php";
$sql="select* from updatepass where token=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$selectors);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['token']==$selector)
    {
    $a=$a+1;
    $tokenemail=$row['email'];
}
  }
  if ($a<1) {
 echo "you need to re-submit your request".$selector;
  }
  else
  {
$sqls1="select* from updatepass where email=?";
$stmts= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmts,"s",$tokenemail);
  mysqli_stmt_execute($stmts);
  $select=mysqli_stmt_get_result($stmts);
  if (!$row=mysqli_fetch_assoc($selection)) {
  	echo "There is an error!";
  }
  else
  {
  $sql2="UPDATE updatepass set password=? where email=?";
  $stmt1= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt1,$sql)) {
 echo "statement failed";
}
else{
	$newpwdhash=sha1($newpasswordrepeat);
  mysqli_stmt_bind_param($stmt,"ss",$newpwdhash,$tokenemail);
  mysqli_stmt_execute($stmt);

  $sql3="delete from upadtepass where email=?";
     $stmt2= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt2,"s",$tokenemail);
  mysqli_stmt_execute($stmt2);
  header("location:index.php?newpwd=updated");
}	
  }

  	}
}
}}}
else
{
	header("location:index.php");
}
?>
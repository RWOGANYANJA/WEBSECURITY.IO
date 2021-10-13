<?php 
if (isset($signup_POST['signup'])) {
  $email=$_POST['email'];
  $a=0;
  include("database.php");
  $sql="select* from student where email=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['email']==$email)
    {
    $a=$a+1;
    $tokenemail=$row['email'];
}
  }
}
  if($a>=1){
  $selector=bin2hex(random_bytes(8));
  $token=random_bytes(32);
  $validator=bin2hex($token);
  $url="http://localhost/serge2/update.php?selector=".$selector;
  $expires=date("U")+1800;
  
     $sql="delete from updatepass where email=?";
     $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);
}
$q="insert into updatepass(email,token) values(?,?)";;
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$q)) {
 echo "statement failed";
}
else{
  $hashedtoken=password_hash($token,PASSWORD_DEFAULT);
   mysqli_stmt_bind_param($stmts,"ss",$email,$selector);
  mysqli_stmt_execute($stmt);
}
//mysqli_stmt_close($stmt);
$from = 'rwoganyanjaserge@gmail.com';
$to = $email;
$subject = 'Reset password';
$message = '<p>follow the following link</p>';
$message .= '<a href="'.$url.'</a></p>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);

}
else{
  echo "<script>alert('sent')</script>";
}
}
?>
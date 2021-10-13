<?php
session_start();


require_once('database.php');
// REGISTER USER
if (isset($_POST['signup'])) {
  // receive all input values from the form
 
  $email = $conn->real_escape_string($_POST['email']);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo "Invalid Email format";
    }
  
  
 
  
    $result ="SELECT count(*) FROM student WHERE email=?";
$stmt = $db->prepare($result);
$stmt->bind_param('s',$email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
  if ($count==0) { 
   
      echo "No account with the Email provided";
    }

  // create and send a verification code to the email
  else {


$otp= mt_rand(100000, 999999);

    $query = "UPDATE users SET confirmationcode=? WHERE email=? ";
  $stmti = $db->prepare($query);
$stmti->bind_param('is',$otp,$email);
$stmti->execute();
$stmti->close();
    $_SESSION['username'] = $username;
    $_SESSION['pwd'] = $password;
    $_SESSION['em'] = $email;
    $_SESSION['code'] = $otp;
    //$_SESSION['stat'] = $status;
    $to=$email;
    $from="From: rwoganyanjaserge@gmail.com";
    $subject="Verification Code ";
    $message =$otp;
  
    $mailing = mail($to,$subject,$message,$from);

    header('location: verify.php');
    
  }
}


?>
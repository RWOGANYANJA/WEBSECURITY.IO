
<?php
session_start();
include 'database.php';
$uname=$_POST["uname"];
$pwd=sha1($_POST["pwd"]);
   $sql = "select *from student where uname = '$uname' and pwd = '$pwd'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
        if($count == 1){  
         $query = "SELECT * FROM users WHERE email_status='Verified' ";
    $stmt = $db->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
   if($num_rows > 0){
      header("location:welcome.php");


   
          // header("location:welcome.php");
            if(!empty($_POST["remember"])) {
            setcookie ("uname",$_POST["uname"],time()+ 3600);
            setcookie ("pwd",$_POST["pwd"],time()+ 3600);
           
            }
            $_SESSION['name']=$uname;
            $_SESSION['pass']=$pwd; 
        }
        else{
         header('location:login2form.php')


        }
     }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 

?>
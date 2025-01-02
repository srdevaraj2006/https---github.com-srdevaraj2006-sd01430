<?php

$username = $_POST['username'];
$mobilenumber = $_POST['mobilenumber'];
$email_id  = $_POST['email_id'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if (!empty($username) || !empty($mobilenumber) || !empty($email_id) || !empty($password1) || !empty($password2) )
{
  if($password1 == $password2){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "sdbase";
  
  
  
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  
    if (mysqli_connect_error()){
      die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }
    else{
      $SELECT = "SELECT email_id From signup1 Where email_id = ? Limit 1";
      $INSERT = "INSERT Into signup1 (username , mobilenumber ,email_id, password1,password2 )values(?,?,?,?,?)";
  
      //Prepare statement
       $stmt = $conn->prepare($SELECT);
       $stmt->bind_param("s", $email_id);
       $stmt->execute();
       $stmt->bind_result($email_id);
       $stmt->store_result();
       $rnum = $stmt->num_rows;
  
       //checking username
        if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("sisss", $username,$mobilenumber,$email_id,$password1,$password2);
          $stmt->execute();
          include "siteindex.html";
        }
        else {
          echo "Someone already registered using this email...!";

        }
      $stmt->close();
      $conn->close();
    }
  }
  else{
    echo '<script>alert("Password does not match...!")</script>';
    include 'index.html';
  }
}
else {
  echo "All field are required";
  die();
}
?>
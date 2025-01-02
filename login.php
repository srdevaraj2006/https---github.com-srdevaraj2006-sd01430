<?php
$email  = $_POST['email_id'];
$pass = $_POST['password1'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sdbase";
$tableName = "signup1";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  
    if (mysqli_connect_error()){
      die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }else{

        $resultemail = $conn->query("SELECT * FROM ".$tableName." WHERE email_id='".$email."'");
        $resultpass = $conn->query("SELECT * FROM ".$tableName." WHERE password1='".$pass."'");

        if ($resultemail->num_rows > 0 and $resultpass->num_rows >0) {
            include "siteindex.html";
        } else {
            echo '<script>alert("Invalid email or password...!")</script>';
            include "login.html";
        }
        

    }
?>
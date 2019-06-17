<?php
session_start();
require 'db_info.php';
$email=$_POST['email'];
$user_email=$_SESSION['email'];
$sql= "INSERT INTO request (from_id,to_id) values ('$user_email','$email') ";
if (mysqli_query($con, $sql)) 
 {
     $_SESSION['contacted']=1;
     header('location: ../pages/donors.php');
 }
 else 
 {
       echo "Error: " . $sql . "<br>" . mysqli_error($con);
   }

?>

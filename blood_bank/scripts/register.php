<?php
session_start();

if (isset($_POST['submit'])) {
 require 'db_info.php' ;
 
 $f_name = mysqli_real_escape_string($con,$_POST['first_name']);
 $l_name = mysqli_real_escape_string($con,$_POST['last_name']);
 $email =  mysqli_real_escape_string($con,$_POST['email']);
 $u_password =  mysqli_real_escape_string($con,$_POST['password']);
 $number=  mysqli_real_escape_string($con,$_POST['phone_no']);
 $blood_grp=  mysqli_real_escape_string($con,$_POST['blood_grp']);
 $age= mysqli_real_escape_string($con,$_POST['age']);
 $address= mysqli_real_escape_string($con,$_POST['address']);
 $state= strtolower(mysqli_real_escape_string($con,$_POST['state']));
 $city=strtolower(mysqli_real_escape_string($con,$_POST['city']));
 $pass=sha1($u_password);

 $sql = "INSERT INTO `user` (`first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `state`, `city`, `blood_grp`, `age`)
         VALUES ('$f_name', '$l_name', '$email', '$pass', '$number', '$address', '$state', '$city', '$blood_grp', '$age')";
 
 if (mysqli_query($con, $sql)) 
 {					          			         					         
    $_SESSION['email']=$email;
    $_SESSION['number']=$number;
    $_SESSION['address']=$address;
    $_SESSION['age']=$age;
    $_SESSION['name']=$f_name." ".$last_name;                                     
    $_SESSION['LoggedIn']=1;
    echo "New record created successfully";
    header('location: ../pages/user.php');
  } 
 
  else 
 {
       echo "Error: " . $sql . "<br>" . mysqli_error($con);
   }

   mysqli_close($con);
}

?>
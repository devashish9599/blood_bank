<?php  
session_start();
 if (isset($_POST['submit'])) {

require 'db_info.php';
// Check connection
if (!$con) {
die("Connection failed: " . mysqli_connect_error());
}

$email_id = mysqli_real_escape_string($con, $_POST['email_id']);
$u_password = mysqli_real_escape_string($con, $_POST['password']);

$pass=sha1($u_password);
$sql = "SELECT * FROM user WHERE email = '".$email_id."' AND password = '".$pass."'";
$checklogin=mysqli_query($con,$sql);
if(mysqli_num_rows($checklogin) == 1)
{
$row = mysqli_fetch_array($checklogin);
                                    
$name=$row['first_name']." ".$row['last_name'];
$num=$row['phone_number'];
$address=$row['address'];
$age=$row['age'];
$_SESSION['number']=$num;                                                                          
$_SESSION['email']=$email_id;
$_SESSION['address']=$address;
    $_SESSION['age']=$age;
$_SESSION['name']=$name;                                     
$_SESSION['LoggedIn']=1;
echo "<h3>Success.</h3>";
header('Location: ../pages/user.php',TRUE);
}
else{echo "<p>error loging in</p>";}
}
?>
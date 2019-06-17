<?php
require 'db_info.php';
session_start();

if (isset($_POST['submit'])) {
    
    $to= $_SESSION['email'];
    $sql = "UPDATE request SET accepted=1 WHERE from_id= ".$from." AND to_id=".$to;
    if (mysqli_query($con, $sql)) 
    {
        $d_email =$_SESSION['email'] ;
        $d_num =$_SESSION['number'] ;
        $d_age =$_SESSION['age'] ;
        $d_address =$_SESSION['address'] ;
        $d_name =$_SESSION['name'] ;
        
        $sql= "SELECT * FROM user
        WHERE email= '".$_POST['email']."'";
        $row = mysqli_fetch_array(mysqli_query($con, $sql));
        
        $a_email =$row['email'] ;
        $a_num =$row['number'] ;
        $a_age =$row['age'] ;
        $a_address =$row['address'] ;
        $a_name =$row['name'] ;

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'G:\xampp\composer\vendor\autoload.php';


        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'haemolox@gmail.com';                     // SMTP username
            $mail->Password   = 'haemolox123';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('haemolox@gmail.com', 'Haemolox');
            $mail->addAddress($d_email);     // Add a recipient
            $mail->addAddress($a_email);
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Details';
            $mail->Body    = 'The details of the requester is as follows:<br>
            <b>Name :</b>'.$a_name.'<br>
            <b>Age :</b>'.$a_age.'<br>
            <b>Number :</b>'.$a_num.'<br>
            <b>Address :</b>'.$a_address.'<br>
            The details of the donor is as follows:<br>
            <b>Name :</b>'.$d_name.'<br>
            <b>Age :</b>'.$d_age.'<br>
            <b>Number :</b>'.$d_num.'<br>
            <b>Address :</b>'.$d_address.'<br>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
            header('location: ..\pages\user.php');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }	 
}


?>

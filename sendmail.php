<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample1";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";

$emailto = $_POST["email"];


$sqlquery = "select name from register where email = '$emailto'";

$result = mysqli_query($conn, $sqlquery);

$num = mysqli_num_rows($result);

if($num == 1)
{
    require 'C:\xampp\htdocs\Complaint Management System\phpmailer\PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    
    $mail->Username='ajitday21@gmail.com';
    $mail->Password='@a21day21';
    
    $mail->setFrom=('ajitday21@gmail.com');
    $mail->addAddress($emailto);
    $mail->addReplyTo=('ajitday21@gmail.com');
    
    $mail->isHTML(true);
    $mail->Subject='Password Recovery Mail';
    $mail->Body='Click the Link to Reset Your Password :<a href="http://localhost/complaint%20management%20system/registered-new-pwd.php">Link</a>';
    
    if($mail->send())
    {
      echo "<script> alert('Mail has been sent please check your mail');window.location='registered-forgot-pwd.php';</script>";
    }
    else
    {
      echo "<script> alert('Email Not Found');window.location='registered-forgot-pwd.php';</script>";
    echo 'mailer error:' .$mail->ErrorInfo;
    }
}
else
{
echo "<script> alert('Invalid Email Address');window.location='registered-forgot-pwd.php';</script>";
}
?>


















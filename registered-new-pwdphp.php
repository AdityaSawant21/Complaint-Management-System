<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample1";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
$emailto = $_POST['email'];
$npwd = $_POST['newpwd'];
$cpwd = $_POST['confirmpwd'];

$sqlquery = "update register set password ='$npwd', cpassword ='$cpwd' where email = '$emailto'";

if($conn->query($sqlquery)==TRUE)
{
echo "<script> alert('Password has been Change');window.location='index.php';</script>";
}
else
{
echo $conn->error;
}
?>
















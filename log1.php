<?php
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
echo "Connected successfully to database log1";

$name = $_POST['Name'];
$dob = $_POST['birthday'];
$gender = $_POST['Gender'];
$mob = $_POST['Contact'];
$email = $_POST['Email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$check = $_POST['agree'];

$sqlquery = "INSERT INTO register(name, dob, gender, contact, email, password, cpassword, agree) VALUES('$name', '$dob', '$gender', '$mob', '$email', '$password', '$cpassword', '$check')";

if($conn->query($sqlquery)==TRUE)
{
echo "<script> alert('Registration Sucessfull'); window.location='index.php';</script>";
}
else
{
echo "<script> alert('Enter Valid Data');window.location='index.php';</script>";
}

?>























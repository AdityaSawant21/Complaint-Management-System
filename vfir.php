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

$cid = $_POST['id'];
$status = $_POST['status'];

$sqlquery = "update fir set status='$status' where id='$cid'";

if($conn->query($sqlquery)==TRUE)
{
echo "<script> alert('Verfication Sucessfull');window.location='firshow.php';</script>";
}
else
{
echo $conn->error;
}
?>
















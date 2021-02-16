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

$incetype = $_POST['ice1'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$hdate = $_POST['hdate'];
$location = $_POST['location'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$states = $_POST['states'];
$country = $_POST['country'];
$desc = $_POST['desc'];
$person = $_POST['person'];
$idproof = $_POST['proof'];
$idno = $_POST['idno'];
$agree = $_POST['agree'];

$fn = $_FILES['image']['name'];
$tm = $_FILES['image']['tmp_name'];
move_uploaded_file($tm, "pphoto/".$fn);

$fn1 = $_FILES['image1']['name'];
$tm1 = $_FILES['image1']['tmp_name'];
move_uploaded_file($tm1, "Iphoto/".$fn1);

$sqlquery = "INSERT INTO fir(incetype, fname, lname, contact, email, gender, hdate, location, pincode, city, states, country, descp, person, iproof, idproof, idno, pfile, agree) VALUES('$incetype', '$fname', '$lname', '$mob', '$email', '$gender', '$hdate','$location', '$pincode', '$city', '$states', '$country', '$desc', '$person', '$fn1', '$idproof','$idno','$fn','$agree')";


if($conn->query($sqlquery)==TRUE)
{
echo "<script> alert('Complaint form Submitted Sucessfull');window.location='formhtml.php';</script>";
}
else
{
echo $conn->error;
}

?>
















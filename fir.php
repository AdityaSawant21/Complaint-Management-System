<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";

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
$agree = $_POST['agree'];

$sqlquery = "INSERT INTO fir(incetype, fname, lname, mob, email, gender, hdate, location, pincode, city, states, country, descp, person, agree) VALUES('$incetype', '$fname', '$lname', '$mob', '$email', '$gender', '$hdate','$location', '$pincode', '$city', '$states', '$country', '$desc', '$person', '$agree')";

if($conn->query($sqlquery)==TRUE)
{
echo "sucess";
}
else
{
echo $conn->error;
}

?>
















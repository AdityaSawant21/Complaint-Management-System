<?php
session_start();

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
echo "Connected successfully to database log2";

$email = $_POST['Email1'];
$password = $_POST['password1'];

$sqlquery = " select name from register where email = '$email' && password = '$password'  ";

$result = mysqli_query($conn, $sqlquery);

$num = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);
$lognm = $row['name'];


if($num == 1)
{ ?>
<script> var a = '<?php echo $lognm; ?>';
alert('Welcome  '+a);
window.location='formhtml.php';
</script>
<?php
}
else
{
echo "<script> alert('Invalid Email Address');window.location='index.php';</script>";
}

?>























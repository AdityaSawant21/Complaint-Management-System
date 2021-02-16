<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

error_reporting(0);
$id1 = $_GET[id2];
$query = "delete from firtable where id = '$id1'";

$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Deleted from Database')</script>";
}
else
{
    echo "Failed to Delete";
}
?>
<META HTTP-EQUIV="Refresh" CONTENT = "1; URL=http://localhost/home/firdisp.php">
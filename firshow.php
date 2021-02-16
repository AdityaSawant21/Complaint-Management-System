<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'; ?>

<style type="text/css">
.main-div{
width: 100%;  height: 100vh;
background-color: #fff0f5;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
}

.center-div{
width: 100%;
height: 70vh:
background: -webkit-linear-gradient(left, #5DADE2, #00c6ff);
box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
border-radius: 10px;
}

table{
boder-collapse: collapse;
background-color: #e0ffff;
box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
border-radius: 10px;
margin: auto;
}

th,td{
border:1px solid #f2f2f2;
padding: 5px 10px;
text-align: center;
color: grey;
}

th{
text-transform: uppercase;
font-weight: 500;
}

td{
font-size: 15px;
}

.fa{
font-size: 18px;
}

.fa-edit{ color: #63c76a; }
.fa-trash{ color: #ff0000; }
</style>

</head>
<body>
<form name='fir' method="post" action="fir2.php">
<!-- <div class="user"> Welcome Police Officer </div> -->
<div id="title">
<div id="srt">
<p><img src="gov.png" id="im" alt="gov symbol" align="left"></p>
<a href="logout.php"> Logout </a>
<p>Government of India</p>
</div>
<div id="div1">
<img src="logo_1.png" alt="Government Symbol"  align="left">
<h1 align="center" style="font-size : 50px"> COMPLAINT REGISTRATION FORM </h1> 
<p align="center" style="font-size : 25px"> If you have witnessed an incident that files under police attribution, please use this online
police FIR report form to signalize it. the police will review the report and take the 
appropriate action. Thank you for being a responsible citizen. </p> </div> 

<div id="sep">
<marquee>As per the prevailing laws, FIR of a major crime (cognizable crimes like theft, 
burglary, motor vehicle theft, accident, chain-snatching, assault, rape, murder, 
attempt to commit murder, robbery, dacoity, extortion etc) can only be registered 
at a Police Station. 
Please contact your nearest Police Station for the same.</marquee>
</div>
</div>
<hr>

<div id="MyNav">
        <ul>
        <a href="p-dashboard.php"> <li>POLICE HOME</li></a>
            <a href="https://timesofindia.indiatimes.com/news"> <li>NEWS</li></a>
            <a href="https://mumbaipolice.co.in/"> <li>ABOUT US</li></a>
        </ul>
    </div>
    <br>

<div class="main-div">
<h1>List of Complaints</h1>

<div class="center-div">
<table>
<thead>
<tr>
<th>ID</th>
<th>CDate</th>
<th>Incetype</th>
<th>fname</th>
<th>lname</th>
<th>mob</th>
<th>email</th>
<th>gender</th>
<th>location</th>
<th>pincode</th>
<th>City</th>
<th>state</th>
<th>descp</th>
<th>person</th>
<th>ID Proof</th>
<th>Status</th>
<th>operation</th>
</tr>
</thead>

<tbody>

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


$selectquery = " select * from fir";

$query = mysqli_query($conn, $selectquery);

$num = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query))
{
?>

<tr>
<td><?php echo $res['id']; ?></td>
<td><?php echo $res['cdate']; ?></td>
<td><?php echo $res['incetype']; ?></td>
<td><?php echo $res['fname']; ?></td>
<td><?php echo $res['lname']; ?></td>
<td><?php echo $res['contact']; ?></td>
<td><?php echo $res['email']; ?></td>
<td><?php echo $res['gender']; ?></td>
<td><?php echo $res['location']; ?></td>
<td><?php echo $res['pincode']; ?></td>
<td><?php echo $res['city']; ?></td>
<td><?php echo $res['states']; ?></td>
<td><?php echo $res['descp']; ?></td>
<td><?php echo $res['person']; ?></td>
<td><?php echo $res['pfile']; ?></td>
<td><?php echo $res['status']; ?></td>
<td><a href="http://localhost/phpmyadmin/sql.php?db=sample1&goto=db_structure.php&table=fir&pos=0"><i class="fa fa-edit" aria-hidden=""true"></i></a></td>
</tr>

<?php

}

?>

</tbody>
</table>
</div>
</div>
</div>

</body>
</html>
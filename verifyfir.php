<?php 

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="formvalidate.js"></script>
<title></title>
</head>
<body>
<form name='fir' method="post" action="vfir.php">
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
            <a href="https://timesofindia.indiatimes.com/news"> <li>NEWS</li></a>
            <a href="https://mumbaipolice.co.in/"> <li>ABOUT US</li></a>
            <a href="firshow.php"> <li>LIST OF COMPLAINTS</li></a>
        </ul>
    </div>

    <br>

<div class="col-25"><label for="id">Enter Complaint ID</label> </div><div class="col-75"><input type="text" id="id" name="id" size="30" placeholder="Complaint ID...."> </div><br> <br>

<div class="col-25"><label for="status">Select Status</label></div> <div class="col-75">
<select id="status" name="status" autocomplete="off">
<option selected="" value="default">(Please select Status)</option>
<option value="verified">Verified</option>
<option value="onprocess">On Process</option>
<option value="unvalid">Invalid Data</option>
<option value="solved">Solved</option>
</select>
<br> <br>
<div class="col-25" id="butn" align="center"><input type="submit" value="Submit">
</div>

</form>
</body>
</html>



















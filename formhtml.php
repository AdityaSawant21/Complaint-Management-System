<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="formvalidate.js"></script>
<title> Police Report </title>
</head>
<body>

<form name='fir' method="post" action="fir2.php" enctype = "multipart/form-data">
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
            <a href="check_status.php"> <li>STATUS</li></a>
        </ul>
    </div>

    <br>


<div class="container">
<div id="dd" style="font-size : 23px">
<label for="itype">Incident type</label> &nbsp
<input type="checkbox"  class="check" id="i1" name="ice1" value="collision">
<label for="i1"> Collision</label><br>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
<input type="checkbox" class="check" id="i2" name="ice1" value="theft">
<label for="i2"> Theft</label><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="checkbox" class="check" id="i3" name="ice1" value="fraud">
<label for="i3"> Fraud</label><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="checkbox" class="check" id="i4" name="ice1" value="crime">
<label for="i4"> Crime</label><br> <br>

<div class="col-25">
<label for="fname">Name of the person reporting the incident</label></div> <div class="col-75"><input type="text" id="fname" name="fname" size="30" placeholder="First name.."> </div>
<div class="col-25"><label for="lname"></label></div><div class="col-75"><input type="text" id="lname" name="lname" size="30" placeholder="Last name.."></div><br><br>
<div class="col-25"><label for="mob">Phone </label></div><div class="col-75"><input type="text" id="mob" name="mob" size="30" placeholder="Mobile no.."></div> 
<div class="col-25"><label for="email">Email</label></div><div class="col-75"><input type="text" id="email" name="email" size="30" placeholder="Email Address.."></div><br> <br>
<div class="col-25"><label for="gender">Gender</label></div><div class="col-75"><div id=butn> <input type="radio" class="checkgen" id="male" name="gender" value="male"><label>Male</label>
<input type="radio" class="checkgen" id="female" name="gender" value="female"><label>Female</label>
<input type="radio" class="checkgen" id="other" name="gender" value="other"><label>Other</label></div></div>

<div class="col-25"><label for="hdate">Date when incident took place </label></div><div class="col-75"><input type="date" id="hdate" size="30" name="hdate"></div><br> <br>
 
<div class="col-25"><label for="location">Location of the incident</label> </div><div class="col-75"><input type="text" id="location" name="location" size="30" placeholder="Street Address.."> </div>
<div class="col-25"><label for="pincode">Pincode</label></div> <div class="col-75"><input type="text" id="pincode"  size="30" name="pincode"></div><br><br>
<div class="col-25"><label for="city">City</label></div><div class="col-75"><input type="text" id="city" name="city" size="30" placeholder="City"></div> <br> <br> <br>
<div class="col-25"><label for="state">State</label></div><div class="col-75"><select name="states">
<option selected="" value="default">(Please select a state)</option>
<option value="mh">Maharashtra</option>
<option value="de">Delhi</option>
<option value="gu">Gujrat</option>
<option value="ke">Kerla</option>
<option value="">Punjab</option>
<option value="tn">Tamil Nadu</option>
<option value="bi">Bihar</option>
<option value="od">Odisha</option>
<option value="up">Utter Pradesh</option>
<option value="mp">Madhya Pradesh</option>
<option value="ch">Chhattisgarh</option>
<option value="rj">Rajstaan</option>
</select>
</div><br><br>
<div class="col-25"><label for="country">Country</label></div><div class="col-75"> <input type="text" id="country" name="country" size="30" placeholder="India"></div> <br>
<br><br>


<div class="col-25">
<label for="desc">Please describe the incident</label>
</div>
<div class="col-75">
<textarea id="desc" name="desc" rows="5" cols="50" placeholder="Describe Incident Here..">
</textarea></div><br><br>
<div class="col-25"><label for="person">How many people were involved ?</label></div><div class="col-75"><input type="number" id="person" size="30" name="person"></div> <br> <br>
<div class="col-25"><label for="file">Upload Incident Proof</label></div><div class="col-75"><input type="file" id="file1" size="30" name="image1"></div><br><br>
<div class="col-25"><label for="idproof">Select ID Proof</label></div><div class="col-75"><div id=butn> <input type="radio" class="checkgen" id="aadhar" name="proof" value="aadhar"><label>Aadhar Card</label>
    <input type="radio" class="checkgen" id="pan" name="proof" value="pan"><label>Pan Card</label>
    <input type="radio" class="checkgen" id="voter" name="proof" value="voter"><label>VoterID</label></div></div><br> <br>
    <div class="col-25"><label for="idno">Enter ID Number</label></div><div class="col-75"><input type="text" id="idno" size="20" name="idno"></div> <br> <br>
<div class="col-25"><label for="file">Upload ID</label></div><div class="col-75"><input type="file" id="file" size="30" name="image"></div><br><br><br><br>

<p id="div1"><input type="checkbox" id="agree" name="agree" value="agree"><label> I certify that the information provided by me in above form is accurate and correct as per best of my knowledge. 
I understand that withholding of information or giving false information is a criminal offense and may result in legal action against me. </label></p><br> <br>

<div class="col-25" id="butn" align="center"><input type="submit" value="Submit">
</div><br> <br>
<hr>
</div></div>

<p id="p" style="font-size : 25px">Dislaimer:
As per the prevailing laws, FIR of a major crime (cognizable crimes like theft, 
burglary, motor vehicle theft, accident, chain-snatching, assault, rape, murder, 
attempt to commit murder, robbery, dacoity, extortion etc) can only be registered 
at a Police Station. 
Please contact your nearest Police Station for the same. </p> <br> <br>

<div id="lst">
</div>
</form>
</body>
</html>









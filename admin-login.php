<?php 


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Register Page</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<form action="log22.php" name="myForm1"  method="post">
  <div class="cont">
    <div class="form sign-in">
      <h2>Admin Log In</h2>
      <label>
        <span>Username</span>
        <input type="text" name="Email1" autocomplete="off">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password1" autocomplete="off">
      </label>
      <button class="submit" type="submit" name="login">Log In</button>
      <div class="social-media">
        <a href="police-login.php"><h3>Login as Police</h3></a>
        <br>
        <a href="index.php"><h3>Login as User</h3></a>
      </div>
    </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Please Enter Your Email and password to Login into the system</h2>
        </div>
      </div>
    </div>
    </div>
</form>
</body>
</html>
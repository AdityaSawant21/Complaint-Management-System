<!DOCTYPE html>
<html>
<head>
	<title>User Forgot Password</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #228B22;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
	}
	body  {
	  	background-color: #00FFFF;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
</style>
<body>
	<?php $email = 0;
		$dob = 0;
		?>
		<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #f2f2f2;">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #009999;"><b>User New Password</b></p></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<form action="registered-new-pwdphp.php" method="post">
			<tr>
				<td>Enter Email Address: </td>
				<td> <input class="input" type="email" name="email" placeholder="Enter email address....." required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>Enter New Password: </td>
				<td><input class="input" type="password" name="newpwd" placeholder="Enter new password....." required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>Enter Confirm Password: </td>
				<td> <input class="input" type="password" name="confirmpwd" placeholder="Enter confirm password....." required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input style="font-size: 28px; background-color: #228B22; border: 1px solid #228B22; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Set Password"></td>
			</tr>
			</form>
		</table>
	</body>
</html>
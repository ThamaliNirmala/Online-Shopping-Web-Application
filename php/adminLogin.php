<!--
IT19003160
Kumarasiri R.D.S.R 
Group 2
Kurunegala Center
-->


<?php
require 'config.php';


if(count($_POST)>0) {

	$result = mysqli_query($con,"SELECT * FROM admindb WHERE adminID='" . $_POST["userID"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo  
		"<html>
<head>
<title>Admin Login</title>
<link rel='stylesheet' type='text/css' href='../styles/admin.css' />
</head>
<body>
<form name='frmUser' method='post' action='../php/adminLogin.php' style = 'margin-top:200px'>
		<center><h4 style = 'color:red'>Invalid Username or Password!</h4></center>
		<table border='0' cellpadding='10' cellspacing='1' width='500' align='center' class='tblLogin'>
			<tr class='tableheader'>
			<td align='center' colspan='2'>Enter Login Details</td>
			</tr>
			<tr class='tablerow'>
			<td>
			<input type='text' name='userID' placeholder='Admin ID' class='login-input' required></td>
			</tr>
			<tr class='tablerow'>
			<td>
			<input type='password' name='password' placeholder='Password' class='login-input' required></td>
			</tr>
			<tr class='tableheader'>
			<td align='center' colspan='2'><input type='submit' name='submit' value='Submit' class='btnSubmit'></td>
			</tr>
		</table>
</form>
</body></html>";
	} else {
		echo "<center><h4 style = 'margin-top:300px;color:red'>You have successfully authendicated !</h4>".
		"<html>
		</head>
		<title>Admin Login</title>
		<link rel = 'stylesheet' href = '../styles/formStyles.css'/>
		</head>
		<body>
		
		<a href = '../html/admin.html'><button class = 'button0 button1'>Click to Proceed</button></a></center>
		
		</body>
		</html>";
	}
}
?>

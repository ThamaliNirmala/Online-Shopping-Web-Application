<!--
IT20015558
Herath A.M.T.N
Group 2
Kurunegala Center
-->



<?php
require 'config.php';

$x = $_POST['update'];
if(isset($x)){
	$PWD=$_POST['pwd'];
	$RPWD=$_POST['rpwd'];
	$MOBILE=$_POST['mobile']; 
	
$sql = "UPDATE registration 
		SET password= '$PWD' ,  rePassword = '$RPWD'
		WHERE mobileNumber = '$MOBILE'";

if ($con->query($sql) === TRUE) {
  echo "Password reset successfully";
} else {
  echo "Error updating record: " . $con->error;
}

}

$con->close();
?>
<!--
IT19003160
Kumarasiri R.D.S.R 
Group 2
Kurunegala Center
-->

<?php
require 'config.php';

$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];
	
	
$sql = "DELETE  FROM laundrydb
		WHERE itemCode = '$ID'";

if ($con->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error Deleted record: " . $con->error;
}

}

$con->close();
?>
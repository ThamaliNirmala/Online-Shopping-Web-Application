<!--
IT20074722
Tharaka H.D.K
Group 2
Kurunegala Center
-->



<?php
require 'config.php';

$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];  /*knife*/
	
	
$sql = "DELETE  FROM knifedb
		WHERE itemCode = '$ID'";

if ($con->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error Deleted record: " . $con->error;
}

}

$con->close();
?>
<!--
IT20276164
Bandara E.G.M.D
Group 2
Kurunegala Center
-->




<?php
require 'config.php';

$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];  /*plate*/
	
	
$sql = "DELETE  FROM platedb
		WHERE itemCode = '$ID'";

if ($con->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error Deleted record: " . $con->error;
}

}

$con->close();
?>
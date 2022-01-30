<!--
IT20015558
Herath A.M.T.N
Group 2
Kurunegala Center
-->



<?php
require 'config.php';

$x = $_POST['update'];
if(isset($x)){		/*skin*/
	$ID=$_POST['id'];
	
	
$sql = "DELETE  FROM skindb
		WHERE itemCode = '$ID'";

if ($con->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error Deleted record: " . $con->error;
}

}

$con->close();
?>
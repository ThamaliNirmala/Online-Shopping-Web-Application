<!-- Matharaarachchi M.A.N.C 
	 IT19992358
	 Internet and Web Technologies
	 Final Project | Online Grocery Delvery System	-->



<?php
require 'config.php';

$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];  /*beverage*/
	
	
$sql = "DELETE  FROM beveragedb
		WHERE itemCode = '$ID'";

if ($con->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error Deleted record: " . $con->error;
}

}

$con->close();
?>
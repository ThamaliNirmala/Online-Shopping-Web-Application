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
	$ID=$_POST['id'];
	$PRICE=$_POST['price'];
	$STOCK=$_POST['stock']; /*skin*/
	$OFFER=$_POST['offer'];
	
	
$sql = "UPDATE skindb 
		SET price= '$PRICE' ,  stock = '$STOCK' , offer = '$OFFER'
		WHERE itemCode = '$ID'";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $con->error;
}

}

$con->close();
?>
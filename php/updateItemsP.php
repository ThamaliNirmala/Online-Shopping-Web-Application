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
	$ID=$_POST['id'];
	$PRICE=$_POST['price'];
	$STOCK=$_POST['stock'];  /*plate*/
	$OFFER=$_POST['offer'];
	
	
$sql = "UPDATE platedb 
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
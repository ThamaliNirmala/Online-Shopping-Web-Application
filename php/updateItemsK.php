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
	$ID=$_POST['id'];
	$PRICE=$_POST['price'];
	$STOCK=$_POST['stock']; /*knife*/
	$OFFER=$_POST['offer'];
	
	
$sql = "UPDATE knifedb 
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
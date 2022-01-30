<!--
IT19003160
Kumarasiri R.D.S.R 
Group 2
Kurunegala Center
-->




<?php

require ('config.php');
$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];
	$NAME=$_POST['name']; /*laundry*/
	$PRICE=$_POST['price'];
	$STOCK=$_POST['stock'];
	$OFFER=$_POST['offer'];
	
	

	$sql = "INSERT INTO laundrydb (itemCode, itemName, price,stock,offer)
	VALUES ('$ID', '$NAME', '$PRICE','$STOCK','$OFFER')";
	
	

if ($con->query($sql)) {
  echo "New record added for Item ";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;

}

}
$con->close();
?>
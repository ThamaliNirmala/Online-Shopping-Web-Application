<!--
IT20276164
Bandara E.G.M.D
Group 2
Kurunegala Center
-->




<?php

require ('config.php');
$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];
	$NAME=$_POST['name']; /*plate*/
	$PRICE=$_POST['price'];
	$STOCK=$_POST['stock'];
	$OFFER=$_POST['offer'];
	
	

	$sql = "INSERT INTO platedb (itemCode, itemName, price,stock,offer)
	VALUES ('$ID', '$NAME', '$PRICE','$STOCK','$OFFER')";
	
	

if ($con->query($sql)) {
  echo "New record added for Item ";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;

}

}
$con->close();
?>
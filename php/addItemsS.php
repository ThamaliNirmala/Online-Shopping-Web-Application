<!--
IT20015558
Herath A.M.T.N
Group 2
Kurunegala Center
-->



<?php

require ('config.php');
$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];
	$NAME=$_POST['name']; /*skin*/
	$PRICE=$_POST['price'];
	$STOCK=$_POST['stock'];
	$OFFER=$_POST['offer'];
	
	

	$sql = "INSERT INTO skindb (itemCode, itemName, price,stock,offer)
	VALUES ('$ID', '$NAME', '$PRICE','$STOCK','$OFFER')";
	
	

if ($con->query($sql)) {
  echo "New record added for Item ";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;

}

}
$con->close();
?>
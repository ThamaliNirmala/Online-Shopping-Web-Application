<!-- Matharaarachchi M.A.N.C 
	 IT19992358
	 Internet and Web Technologies
	 Final Project | Online Grocery Delvery System	-->




<?php

require ('config.php');
$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];
	$NAME=$_POST['name']; /*beverage*/
	$PRICE=$_POST['price'];
	$STOCK=$_POST['stock'];
	$OFFER=$_POST['offer'];
	
	

	$sql = "INSERT INTO beveragedb (itemCode, itemName, price,stock,offer)
	VALUES ('$ID', '$NAME', '$PRICE','$STOCK','$OFFER')";
	
	

if ($con->query($sql)) {
  echo "New record added for Item ";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;

}

}
$con->close();
?>
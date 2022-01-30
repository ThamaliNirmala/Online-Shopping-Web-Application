<!-- Matharaarachchi M.A.N.C 
	 IT19992358
	 Internet and Web Technologies
	 Final Project | Online Grocery Delvery System	-->


<?php
require 'config.php';

$x = $_POST['update'];
if(isset($x)){
	$ID=$_POST['id'];
	$PRICE=$_POST['price'];
	$STOCK=$_POST['stock']; /*beverage*/
	$OFFER=$_POST['offer'];
	
	
$sql = "UPDATE beveragedb 
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
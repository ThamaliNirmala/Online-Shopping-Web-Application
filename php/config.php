<?php

$con = new mysqli("localhost" , "root" , "" , "vip");

if($con->connect_error){
	
	die("Connect Error ! " . $con->connect_error);
	
}

?>
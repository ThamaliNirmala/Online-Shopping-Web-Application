<!--
IT19003160
Kumarasiri R.D.S.R 
Group 2
Kurunegala Center
-->

<!DOCTYPE html>
<html>
<head>
	<title>Profile Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/layout.css"/>
	<link rel="stylesheet" href="../styles/formStyles.css"/>
	<link rel="icon" href="../ico.ico" type="image/x-icon">
	<style>
		body{
			background-image:url("../images/mama.jpg");
			background-position:no repeate;
		}
	</style>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<!--Header Section-->
<body>
	
	<div class="top-container">
		<a href="#" title = "VIP Grocery Delivery System"><img src="../images/logo.png" alt="VIP Grocery Delivery System"></a>
		<img src="../images/word2.png" style="float:right;display:block;height:100px">
	</div>
<!--navigation bar-->	
<div class="header" id="myHeader">
<div class="topnav">
  <a  href="../home.html">Home</a>
  <a href="../html/registration.html">Registration</a>
  <a href="../html/login.html">Login</a>
  <a href="../html/contact.html">Contact Us</a>
  <a href="../html/userAcc.html">User Accounts</a>
  <a class="active zoom" class="active zoom" href="../html/admin.html">Administrator</a>
  <div class="search-container">
    <form method = 'post' action="search.php">
      <input type="text" placeholder="Find Your Groceries Here" name="search">
      <input type="submit" value="Search" class="input input1" name="submit"><i class="fa fa-search"></i>
    </form>
  </div>
</div>

</div>
<div>
<a href = "../home.html"><input type="submit" value="Logout" style = "float:right;padding:5px;background:red;color:white"></a>
</div>


<br><br>
<section>

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<?php
	
	require "config.php";
	echo "<center><h1>User Profiles</h1></center>";
	$sql = "SELECT * FROM registration";
	$result = $con->query($sql);
	
	
	if($result->num_rows > 0){
		
		echo "<center><table border = '0'  style = ' 
				background: rgb(0, 0, 0); /* Fallback color */
				background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
				color: #f1f1f1;width:100%'>".
		
				"<th style = 'color:#00ff00'>First Name</th>".
				"<th style = 'color:#00ff00'>Last Name</th>".
				"<th style = 'color:#00ff00'>Gender</th>".
				"<th style = 'color:#00ff00'>Mobile Number</th>".
				"<th style = 'color:#00ff00'>Email</th>".
				"<th style = 'color:#00ff00'>Address</th>".
				"<th style = 'color:#00ff00'>Password</th>";
		while($row = $result -> fetch_assoc()){
			
			echo 
					"<tr><td style = 'padding:20px;text-align:center;color:orange'>".$row['firstName']."</td>".
					"<td style = 'padding:20px;text-align:center'>".$row['lastName']."</td>".
					"<td style = 'padding:20px;text-align:center'>".$row['gender']."</td>".
					"<td style = 'padding:20px;text-align:center'>".$row['mobileNumber']."</td>".
					"<td style = 'padding:20px;text-align:center'>".$row['email']."</td>".
					"<td style = 'padding:20px;text-align:center'>".$row['address']."</td>".
					"<td style = 'padding:20px;text-align:center'>".$row['password']."</td></tr>";
		}
		echo "</table></center>";
	}
	else{
		
		echo "no result";
	}
	
$con->close();

?>		

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	<br><br><br><br><br><br>	
	
	
	<div>
		
			<form method = "post" target = "_self" action = "deleteUser.php">
		
			<center><fieldset style = 'border:solid black;width:50%;margin-left:100px'><legend style ='background:yellow'>Remove User</legend>
			<table border = '0'  style = ' background: rgb(0, 0, 0);background: rgba(0, 0, 0, 0.5);color: #f1f1f1;'>
	
				<th style = 'color:#00ff00'>Mobile Number</th>
				
			<tr><td style = 'padding:30px;text-align:center'><input type = 'text' name = 'id' style = 'width:300px;background: rgba(0, 0, 0, 0.5);color:white' placeholder = 'enter' required></td>
	
			<td><input type = 'submit' value = "Remove" name = 'update' class='button0 button2' style='float:left;padding:10px'></td></tr></table></fieldset></form>
	</div>
	

		</section>
		<br><br>

	<footer>
	
		<section>
		
			<nav class="nav2">
				<h4>We are accepted</h4>
				<a href="../html/login.html" title="Pay via Visa" ><img src="../images/visa.png" style="width:50px" class="zoom"></a>
				<a href="../html/login.html" title="Pay via Master Card" ><img src="../images/master.png" style="width:50px" class="zoom"></a>
				<a href="../html/login.html" title="Pay via Discover" ><img src="../images/discover.png" style="width:50px" class="zoom"></a>
				<p style="font-size:12px;color:red;">Copyright (c) VIP Online Grocery Delivery System</p>
			</nav>
			
			<article class="article2">
				<h4>Also available in</h4>
				<a href="https://play.google.com" title="Google Play" ><img src="../images/google.png" style="width:80px" class="zoom"></a>
				<a href="https://store.apple.com" title="App Store" ><img src="../images/app.png" style="width:80px" class="zoom"></a>
			
			</article>
			
			<article class="article2">
				<div class="zoom"><a href="../html/termsConditions.html" style="text-decoration:none;color:#00bbaa"><p>Terms and Conditions</p></a></div>
				<div class="zoom"><a href="../html/termsConditions.html" style="text-decoration:none;color:#00bbaa"><p>Privacy Policy</p></a></div>
				<div class="zoom"><a href="../html/suggestions.html" style="text-decoration:none;color:#00bbaa"><p>Feedback and Suggestions</p></a></div>
			</article>
			
			<aside class="aside3">
			<br><h4>Follow us on</h4>
			<a href="https://www.facebook.com" title="Facebook" ><img src="../images/fb.png" style="width:30px" class="zoom"></a>
			<a href="https://www.intagram.com" title="Instagram" ><img src="../images/insta.png" style="width:30px" class="zoom"></a>
			<a href="https://www.twitter.com" title="Twitter" ><img src="../images/twitter.png" style="width:30px" class="zoom"></a>
			
			</aside>
		</section>
			
	
	
	</footer>
<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html> 

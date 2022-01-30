<!--
IT20074722
Tharaka H.D.K
Group 2
Kurunegala Center
-->

<!DOCTYPE html>
<html>
<head>
	<title>VIP Grocery Delivery</title>
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
  <a class="active zoom" href="../home.html">Home</a>
  <a href="../html/registration.html">Registration</a>
  <a href="../html/login.html">Login</a>
  <a href="../html/contact.html">Contact Us</a>
  <a href="../html/userAcc.html">User Accounts</a>
  <div class="search-container">
    <form method = 'post' action="search.php">
      <input type="text" placeholder="Find Your Groceries Here" name="search">
      <input type="submit" value="Search" class="input input1" name="submit"><i class="fa fa-search"></i>
    </form>
  </div>
</div>

</div>


<br><br>
<section>
			<nav class="nav1">
				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="../html/plates.html">Plate Sets</a>
					<a href="../html/beverage.html">Beverages</a>
					<a href="../html/laundry.html">Laundry Items</a>
					<a href="../html/skin.html">Skin Care</a>
					<a href="../html/knife.html">Knife Sets</a>
				</div>
				<div class="zoom"><span class="zoom" style="font-size:20px;cursor:pointer;color:white" onclick="openNav()">&#9776; Popular Orders</span></div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<h5 style="color:white">Pin It</h5>
					<a href="https://www.pinterest.com" title = "pinterest" ><img src="../images/pin.png" style ="width:50px" class="zoom"></a>
					<h6 style="color:yellow">Online Shopping In Sri Lanka with Free Home Delivery</h6>
					<p style="font-size:11px;color:blue">"What was the last time you had an exciting and rewarding online shopping experience? Can’t remember!"
					</p>
		
				</ul><br/>

			</nav>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php

require ('config.php');
$x = $_POST['update'];
if(isset($x)){
	$FNAME=$_POST['fname'];
	$LNAME=$_POST['lname']; 
	$GENDER=$_POST['gender'];
	$MNO=$_POST['mobile'];
	$EMAIL=$_POST['email'];
	$ADR=$_POST['address'];
	$PWD=$_POST['pwd'];
	$RPWD=$_POST['rpwd'];
	
	

	$sql = "INSERT INTO registration (firstName, lastName, gender,mobileNumber,email ,address ,password ,rePassword)
	VALUES ('$FNAME', '$LNAME', '$GENDER','$MNO','$EMAIL' , '$ADR' , '$PWD' , '$RPWD')";
	
	

if ($con->query($sql)) {
  echo "<center><h1>You have successfully created VIP Account</h1></center>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;

}

}
$con->close();
?>




<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


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

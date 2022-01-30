<!--
IT19003160
Kumarasiri R.D.S.R 
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
    <form method = 'post' action="#">
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
require 'config.php';

$x = $_POST['submit'];
if(isset($x)){
	$NAME=$_POST['search'];


    $sql_1="SELECT *  FROM laundrydb WHERE itemName like '%$NAME%'";
	$sql_2="SELECT *  FROM beveragedb WHERE itemName like '%$NAME%'";
	$sql_3="SELECT *  FROM knifedb WHERE itemName like '%$NAME%'";
	$sql_4="SELECT *  FROM skindb WHERE itemName like '%$NAME%'";
	$sql_5="SELECT *  FROM platedb WHERE itemName like '%$NAME%'";

    $res_1=$con->query($sql_1);
	$res_2=$con->query($sql_2);
	$res_3=$con->query($sql_3);
	$res_4=$con->query($sql_4);
	$res_5=$con->query($sql_5);
	
	if($res_1->num_rows > 0){
				
     while($row1=$res_1->fetch_assoc()){
		 
		 echo "<center><table border = '0'  style = ' 
				background: rgb(0, 0, 0); /* Fallback color */
				background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
				color: #f1f1f1;'>".
		
				"<th style = 'color:#00ff00'>Item Code</th>".
				"<th style = 'color:#00ff00'>Item Name</th>".
				"<th style = 'color:#00ff00'>Price(Rs.)</th>".
				"<th style = 'color:#00ff00'>Stock</th>".
				"<th style = 'color:#00ff00'>Offer</th>";
				
			echo	"<tr><td style = 'padding:30px;text-align:center;color:orange'>".$row1['itemCode']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row1['itemName']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row1['price']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row1['stock']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row1['offer']."</td><br>";
					
		}
		echo "</table></center><br><br><br>".
		"<a href = '../html/login.html'><button class='button0 button1 zoom' style='float:left'>Add to Cart</button></a>".
		"<a href = '../html/login.html'><button class='button0 button2 zoom' style='float:right'>Buy Now</button></a>";
		
	
	}
	else if($res_2->num_rows > 0){
				
     while($row2=$res_2->fetch_assoc()){
		 
		 echo "<center><table border = '0'  style = ' 
				background: rgb(0, 0, 0); /* Fallback color */
				background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
				color: #f1f1f1;'>".
		
				"<th style = 'color:#00ff00'>Item Code</th>".
				"<th style = 'color:#00ff00'>Item Name</th>".
				"<th style = 'color:#00ff00'>Price(Rs.)</th>".
				"<th style = 'color:#00ff00'>Stock</th>".
				"<th style = 'color:#00ff00'>Offer</th>";
				
			echo	"<tr><td style = 'padding:30px;text-align:center;color:orange'>".$row2['itemCode']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row2['itemName']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row2['price']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row2['stock']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row2['offer']."</td><br>";
					
		}
		echo "</table></center><br><br><br>".
		"<a href = '../html/login.html'><button class='button0 button1 zoom' style='float:left'>Add to Cart</button></a>".
		"<a href = '../html/login.html'><button class='button0 button2 zoom' style='float:right'>Buy Now</button></a>";
		
	
	}
	else if($res_3->num_rows > 0){
				
     while($row3=$res_3->fetch_assoc()){
		 
		 echo "<center><table border = '0'  style = ' 
				background: rgb(0, 0, 0); /* Fallback color */
				background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
				color: #f1f1f1;'>".
		
				"<th style = 'color:#00ff00'>Item Code</th>".
				"<th style = 'color:#00ff00'>Item Name</th>".
				"<th style = 'color:#00ff00'>Price(Rs.)</th>".
				"<th style = 'color:#00ff00'>Stock</th>".
				"<th style = 'color:#00ff00'>Offer</th>";
				
			echo	"<tr><td style = 'padding:30px;text-align:center;color:orange'>".$row3['itemCode']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row3['itemName']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row3['price']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row3['stock']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row3['offer']."</td><br>";
					
		}
		echo "</table></center><br><br><br>".
		"<a href = '../html/login.html'><button class='button0 button1 zoom' style='float:left'>Add to Cart</button></a>".
		"<a href = '../html/login.html'><button class='button0 button2 zoom' style='float:right'>Buy Now</button></a>";
		
	
	}
	else if($res_4->num_rows > 0){
				
     while($row4=$res_4->fetch_assoc()){
		 
		 echo "<center><table border = '0'  style = ' 
				background: rgb(0, 0, 0); /* Fallback color */
				background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
				color: #f1f1f1;'>".
		
				"<th style = 'color:#00ff00'>Item Code</th>".
				"<th style = 'color:#00ff00'>Item Name</th>".
				"<th style = 'color:#00ff00'>Price(Rs.)</th>".
				"<th style = 'color:#00ff00'>Stock</th>".
				"<th style = 'color:#00ff00'>Offer</th>";
				
			echo	"<tr><td style = 'padding:30px;text-align:center;color:orange'>".$row4['itemCode']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row4['itemName']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row4['price']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row4['stock']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row4['offer']."</td><br>";
					
		}
		echo "</table></center><br><br><br>".
		"<a href = '../html/login.html'><button class='button0 button1 zoom' style='float:left'>Add to Cart</button></a>".
		"<a href = '../html/login.html'><button class='button0 button2 zoom' style='float:right'>Buy Now</button></a>";
		
	
	}
	else if($res_5->num_rows > 0){
				
     while($row5=$res_5->fetch_assoc()){
		 
		 echo "<center><table border = '0'  style = ' 
				background: rgb(0, 0, 0); /* Fallback color */
				background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
				color: #f1f1f1;'>".
		
				"<th style = 'color:#00ff00'>Item Code</th>".
				"<th style = 'color:#00ff00'>Item Name</th>".
				"<th style = 'color:#00ff00'>Price(Rs.)</th>".
				"<th style = 'color:#00ff00'>Stock</th>".
				"<th style = 'color:#00ff00'>Offer</th>";
				
			echo	"<tr><td style = 'padding:30px;text-align:center;color:orange'>".$row5['itemCode']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row5['itemName']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row5['price']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row5['stock']."</td>".
					"<td style = 'padding:30px;text-align:center'>".$row5['offer']."</td><br>";
					
		}
		echo "</table></center><br><br><br>".
		"<a href = '../html/login.html'><button class='button0 button1 zoom' style='float:left'>Add to Cart</button></a>".
		"<a href = ',,./html/login.html'><button class='button0 button2 zoom' style='float:right'>Buy Now</button></a>";
		
	
	}
	
	else{
		
		echo "<center><h5>We are sorry no result found</h5></center>";

    }
}

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

/*IT19003160
 Kumarasiri R.D.S.R
 Group 2
 Kurunegala Center
*/

/*   ------------------------------------------VIP POWER :- Kasun(leader),Thamali,Sahan,Mithila,Nuwan ----------------------------------- */
//form validation goes here
function checkPassword(){
	
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		
		alert("Passwords mismatched!");
		return false;
	}
	else{
		
		alert("You have successfully create VIP Account");
		return true;
	}
}
//reset password
function resetPassword(){
	
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		
		alert("Passwords mismatched!");
		return false;
	}
	else{
		
		alert("You have successfully Reset Password");
		return true;
	}
}
/*form submit button*/
function enableButton(){
	
	if(document.getElementById("check").checked && document.getElementById("check0").checked){
		document.getElementById("btn").disabled = false;
	}
	else{
		document.getElementById("btn").disabled = true;
	}
}
/*payment check buttons*/

// -------Payment Handling -----------

/*Enable or Disable checkboxes*/
function sure(){
	
	if(document.getElementById("check0").checked){
		document.getElementById("check").disabled = false;
		document.getElementById("check1").disabled = false;
		document.getElementById("check2").disabled = false;
		document.getElementById("btn").disabled = true;
	}
	else{
		document.getElementById("check").disabled = true;
		document.getElementById("check1").disabled = true;
		document.getElementById("check2").disabled = true;
		document.getElementById("btn").disabled = true;
	}
	
}

//if one check box cheked, others are disabled; button enable when checked and disable once unchecked
function disableCheckboxes(type){
	if(type == "check"){
		if(document.getElementById("check").checked){
			document.getElementById("check1").disabled = true;
			document.getElementById("check2").disabled = true;
			document.getElementById("btn").disabled = false;
		}
		else{
			document.getElementById("check1").disabled = false;
			document.getElementById("check2").disabled = false;
			document.getElementById("btn").disabled = true;
		}	
	}
	else if(type == "check1"){
		if(document.getElementById("check1").checked){
			document.getElementById("check").disabled = true;
			document.getElementById("check2").disabled = true;
			document.getElementById("btn").disabled = false;
		}
		else{
			document.getElementById("check").disabled = false;
			document.getElementById("check2").disabled = false;
			document.getElementById("btn").disabled = true;
		}
	}
	else{
		if(document.getElementById("check2").checked){
			document.getElementById("check").disabled = true;
			document.getElementById("check1").disabled = true;
			document.getElementById("btn").disabled = false;
		}
		else{
			document.getElementById("check").disabled = false;
			document.getElementById("check1").disabled = false;
			document.getElementById("btn").disabled = true;
		}
	}
	
}
//unexpected selection of two or three checks
function error(){
	if(document.getElementById("check").checked && document.getElementById("check1").checked){
		alert("You cannot select two or more");
		document.getElementById("btn").disabled = true;
	}
	else if(document.getElementById("check").checked && document.getElementById("check2").checked){
		alert("You cannot select two or more");
		document.getElementById("btn").disabled = true;
	}
	else if(document.getElementById("check1").checked && document.getElementById("check2").checked){
		alert("You cannot select two or more");
		document.getElementById("btn").disabled = true;
	}
	else if(document.getElementById("check").checked && document.getElementById("check1").checked && document.getElementById("check2").checked){
		alert("You cannot select two or more");
		document.getElementById("btn").disabled = true;
	}
	else{
		document.getElementById("btn").disabled = false;
	}
}

function checking(){
	if(document.getElementById("check0").checked && (document.getElementById("check").checked || document.getElementById("check1").checked || document.getElementById("check2").checked)){
		document.getElementById("btn").disabled = false;
	}
	else{
		document.getElementById("btn").disabled = true;
	}
}
/*delivery page goes here*/

//enable checkboxes
function enableHomeCourier(){
	if(document.getElementById("check0").checked){
		document.getElementById("check").disabled = false;
		document.getElementById("check1").disabled = false;
		
		
	}
	else{
		document.getElementById("check").disabled = true;
		document.getElementById("check1").disabled = true;

	}
	
}
//mandatory buttons checking 
function delivery(){
	
	if(document.getElementById("check0").checked && document.getElementById("check").checked || document.getElementById("check1").checked) {
		document.getElementById("btn").disabled = false;
	}
	else{
		document.getElementById("btn").disabled = true;
	}
}
//select one of checkbox not both
function disableDelivery(deliverType){
	if(deliverType == "check"){
		if(document.getElementById("check").checked){
			document.getElementById("check1").disabled = true;
		}
		else{
		document.getElementById("check1").disabled = false;
		}
	}
	else{
		if(document.getElementById("check1").checked){
			document.getElementById("check").disabled = true;
		}
		else{
			document.getElementById("check").disabled = false;
		}
	}
	
}

//automatic slides    //reference w3schools.com
var slideIndex = 0;

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

//side navigation bar javascript   //reference w3schools.com

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("mySidenav").style.height = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function total(){
	if(document.getElementById("op1").value == "Laundry Items" && document.getElementById("opp1").value == "VIM"){
		document.getElementById("info").innerHTML = "250";
	}
}

function phpCheck(){
	if(document.getElementById("php").checked){
		document.getElementById("sudu").disabled = false;
		
	}
}







//prices.

function priceList(name){
	if(name == "list1"){
		document.getElementById("para1").innerHTML="<marquee><b>Rs.600.00</b></marquee>";
	}else if(name == "list2"){
		document.getElementById("para2").innerHTML="<marquee><b>Rs.250.00</b></marquee>";
	}else if(name == "list3"){
		document.getElementById("para3").innerHTML="<marquee><b>Rs.500.00</b></marquee>";
	}else if(name == "list4"){
		document.getElementById("para4").innerHTML="<marquee><b>Rs.350.00</b></marquee>";
	}else if(name == "list5"){
		document.getElementById("para5").innerHTML="<marquee><b>Rs.1250.00</b></marquee>";
	}else{
		document.getElementById("para6").innerHTML="<marquee><b>Rs.325.00</b></marquee>";
	}
}

//laundry

function priceList1(name){
	if(name == "list1"){
		document.getElementById("para10").innerHTML="<marquee><b>Rs.250.00</b></marquee>";
	}else if(name == "list2"){
		document.getElementById("para20").innerHTML="<marquee><b>Rs.55.00</b></marquee>";
	}else if(name == "list3"){
		document.getElementById("para30").innerHTML="<marquee><b>Rs.355.00</b></marquee>";
	}else if(name == "list4"){
		document.getElementById("para40").innerHTML="<marquee><b>Rs.20.00</b></marquee>";
	}else if(name == "list5"){
		document.getElementById("para50").innerHTML="<marquee><b>Rs.600.00</b></marquee>";
	}else{
		document.getElementById("para60").innerHTML="<marquee><b>Rs.250.00</b></marquee>";
	}
}


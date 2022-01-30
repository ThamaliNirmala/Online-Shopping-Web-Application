/*
IT20276164
Bandara E.G.M.D
Group 2
Kurunegala Center
*/


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("mySidenav").style.height = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
function priceList(name){
	if(name == "list1"){
		document.getElementById("para1").innerHTML="<marquee><b>Rs.600.75</b></marquee>";
	}else if(name == "list2"){
		document.getElementById("para2").innerHTML="<marquee><b>Rs.750.25</b></marquee>";
	}else if(name == "list3"){
		document.getElementById("para3").innerHTML="<marquee><b>Rs.500.00</b></marquee>";
	}else if(name == "list4"){
		document.getElementById("para4").innerHTML="<marquee><b>Rs.1500.21</b></marquee>";
	}else if(name == "list5"){
		document.getElementById("para5").innerHTML="<marquee><b>Rs.2500.10</b></marquee>";
	}else{
		document.getElementById("para6").innerHTML="<marquee><b>Rs.450.24</b></marquee>";
	}
}
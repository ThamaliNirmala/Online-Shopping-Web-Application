/*
IT20015558
Herath A.M.T.N
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
function priceList1(name){
	if(name == "list1"){
		document.getElementById("para1000").innerHTML="<marquee><b>Rs.1600.00</b></marquee>";
	}else if(name == "list2"){
		document.getElementById("para2000").innerHTML="<marquee><b>Rs.1400.00</b></marquee>";
	}else if(name == "list3"){
		document.getElementById("para3000").innerHTML="<marquee><b>Rs.800.00</b></marquee>";
	}else if(name == "list4"){
		document.getElementById("para4000").innerHTML="<marquee><b>Rs.800.00</b></marquee>";
	}else if(name == "list5"){
		document.getElementById("para5000").innerHTML="<marquee><b>Rs.200.00</b></marquee>";
	}else{
		document.getElementById("para6000").innerHTML="<marquee><b>Rs.4500.00</b></marquee>";
	}
}
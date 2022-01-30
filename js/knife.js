/*
IT20074722
Tharaka H.D.K
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
		document.getElementById("para1").innerHTML="<marquee><b>Rs.1600.00</b></marquee>";
	}else if(name == "list2"){
		document.getElementById("para2").innerHTML="<marquee><b>Rs.1400.00</b></marquee>";
	}else if(name == "list3"){
		document.getElementById("para3").innerHTML="<marquee><b>Rs.800.00</b></marquee>";
	}else if(name == "list4"){
		document.getElementById("para4").innerHTML="<marquee><b>Rs.800.00</b></marquee>";
	}else if(name == "list5"){
		document.getElementById("para5").innerHTML="<marquee><b>Rs.200.00</b></marquee>";
	}else{
		document.getElementById("para6").innerHTML="<marquee><b>Rs.4500.00</b></marquee>";
	}
}
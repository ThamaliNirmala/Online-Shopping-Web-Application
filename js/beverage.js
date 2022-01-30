/* Matharaarachchi M.A.N.C 
	 IT19992358
	 Internet and Web Technologies
	 Final Project | Online Grocery Delvery System	*/



function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("mySidenav").style.height = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function readMore(name){
	confirm("Do you want to read more! ");
}

function priceList(name){
	if(name == "list1"){
		document.getElementById("para1").innerHTML="<marquee><b>Rs.250.00<b></marquee>";
	}else if(name == "list2"){
		document.getElementById("para2").innerHTML="<marquee><b>Rs.400.00<b></marquee>";
	}else if(name == "list3"){
		document.getElementById("para3").innerHTML="<marquee><b>Rs.500.00<b></marquee>";
	}else if(name == "list4"){
		document.getElementById("para4").innerHTML="<marquee><b>Rs.300.00<b></marquee>";
	}else if(name == "list5"){
		document.getElementById("para5").innerHTML="<marquee><b>Rs.450.00<b></marquee>";
	}else{
		document.getElementById("para6").innerHTML="<marquee><b>Rs.1250.00<b></marquee>";
	}
}


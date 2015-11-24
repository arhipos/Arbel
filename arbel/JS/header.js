    $('.menu_1, .menu_2, .menu_3, .menu_4, .menu_5, .menu_6, .menu_7').mouseover(function() {
		document.getElementById("menuDrop").style.display="block";
		document.getElementById("subMenu Top_1" ).style.display="block";
		document.getElementById("subMenu Bot_1" ).style.display="block";
		 }	);	
     $('.menu_1, .menu_2, .menu_3, .menu_4, .menu_5, .menu_6, .menu_7').mouseout(function() {
			 document.getElementById("menuDrop").style.display="none";
			document.getElementById("subMenu Top_1").style.display="none";
		 	document.getElementById("subMenu Bot_1").style.display="none";
		 }	);
$('.subMenu a').mouseover(function(){$(this).children('img').css('border','1px solid #e2e2e2');})
$('.subMenu a').mouseover(function(){$(this).css({"font-size":"16", "color":"#2082C5"});})
$('.subMenu a').mouseout(function(){$('.submenu a').css({"font-size":"15", "color":"#000"});})
$('.subMenu a').mouseout(function(){$('.submenu a img').css('border-width','0');})

$('.menu_1').mouseover(function() {
	$(".drop1").fadeIn("slow");
	$(".drop2, .drop3, .drop4, .drop5, .drop6, .drop7").css("display", "none");		
 });	
$('.drop1').mouseover(function() {
	$(".drop1").css('display','block');		
});	
$('.menu_2').mouseover(function() {
	$(".drop2").fadeIn("slow");	
	$(".drop1, .drop3, .drop4, .drop5, .drop6, .drop7").css("display", "none");
});	
$('.drop2').mouseover(function() {
	$(".drop2").css('display','block');
});		
$('.menu_3').mouseover(function() {
	$(".drop3").fadeIn("slow");
	$(".drop1, .drop2, .drop4, .drop5, .drop6, .drop7").css("display", "none");	
});
$('.drop3').mouseover(function() {
	$(".drop3").css('display','block');
});		
$('.menu_4').mouseover(function() {
	$(".drop4").fadeIn("slow");
	$(".drop1, .drop2, .drop3, .drop5, .drop6, .drop7").css("display", "none");	
});
$('.drop4').mouseover(function() {
	$(".drop4").css('display','block');
});		
$('.menu_5').mouseover(function() {
	$(".drop5").fadeIn("slow");
	$(".drop1, .drop2, .drop3, .drop4, .drop6, .drop7").css("display", "none");	
});	
$('.drop5').mouseover(function() {
	$(".drop5").css('display','block');
});	
$('.menu_6').mouseover(function() {
	$(".drop6").fadeIn("slow");
	$(".drop1, .drop2, .drop3, .drop5, .drop4, .drop7").css("display", "none");	
});	
$('.drop6').mouseover(function() {
	$(".drop6").css('display','block');
});	
$('.menu_7').mouseover(function() {
	$(".drop7").fadeIn("slow");
	$(".drop1, .drop2, .drop3, .drop5, .drop6, .drop4").css("display", "none");	
});
$('.drop7').mouseover(function() {
	$(".drop7").css('display','block');
});			 		
    $('.menuDrop, .item').mouseout(function() {
		$(".menuDrop").css("display", "none");
	$(".drop1, .drop2, .drop3, .drop4, .drop5, .drop6, .drop7").css("display", "none");			
		 }	
	);		 

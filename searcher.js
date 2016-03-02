var MinPrice;
var MaxPrice;
var Minimum;
var Maximum;
//подсчет суммы для каждого элемента
function summa() {
	sum=0;
	$('.boxElement').each(function(){
		k=$(this).find('.counter').val();
		m=$(this).find('.priceSlot').html().replace(",", ".");
		m=parseFloat(m).toFixed(2);
		$(this).find('#sumElement').html((k*m).toFixed(2).replace(".00", "").replace(".", ","));
		if (k>=2) { $(this).find('.sum').css("visibility", "visible");	}
		else {$(this).find('.sum').css("visibility", "hidden");}
	});
};

/*поиск ценовых границ*/
function diapazone(){
	 MinPrice=Number(100000000);
	 MaxPrice=Number(0);
	$('.boxElement').each(function(){
		a=$(this).find('.priceSlot').html().replace(",", ".");
		a=parseFloat(a).toFixed(2);
		a=Number(a);
		if (a <= MinPrice) {MinPrice=a}
		if (a >= MaxPrice) {MaxPrice=a}
	});
}

function otsev(){	
		$('.boxElement').each(function(){	
			a=$(this).find('.priceSlot').html().replace(",", ".");
			a=parseFloat(a).toFixed(2);
			a=Number(a);
			if ( (a < 	jQuery("input#minCost").val())||(a > jQuery("input#maxCost").val()) ) {$(this).css("display","none");}
			else {$(this).css("display","block");}
		});
	}
	
$(document).ready(function() {
	diapazone();
	Minimum=MinPrice;
	Maximum=MaxPrice;
	document.getElementById("maxCost").value=Maximum;
	document.getElementById("minCost").value=Minimum;
	summa();	  
    $("#minCost, #maxCost, .counter").keydown(function(event) {
        // Разрешаем: backspace, delete, tab и escape
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || 
             // Разрешаем: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Разрешаем: home, end, влево, вправо
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // Ничего не делаем
                 return;
        }
        else {
            // Обеждаемся, что это цифра, и останавливаем событие keypress
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
	
	jQuery("#slider").slider({
	min: Minimum,
	max: Maximum,
	values: [Minimum,Maximum],
	range: true,
	
	stop: function(event, ui) {
		jQuery("input#minCost").val(jQuery("#slider").slider("values",0));
		jQuery("input#maxCost").val(jQuery("#slider").slider("values",1));
		Minimum=jQuery("#slider").slider("values",0);
		Maximum=jQuery("#slider").slider("values",1);
		otsev();
    }	
});

	jQuery("input#minCost").keyup(function(){	
		var value1=jQuery("input#minCost").val();
		var value2=jQuery("input#maxCost").val();
		min=value1;
		if(parseInt(value1) > parseInt(value2)){
			value1 = value2;
			jQuery("input#minCost").val(value1);
		}
		jQuery("#slider").slider("values",0,value1);	
		otsev();
	});

	
	jQuery("input#maxCost").change(function(){
		var value1=jQuery("input#minCost").val();
		var value2=jQuery("input#maxCost").val();
		
		if (value2 > Maximum) { value2 = Maximum; jQuery("input#maxCost").val(Maximum)}
		
		if(parseInt(value1) > parseInt(value2)){
			value2 = value1;
			jQuery("input#maxCost").val(value2);
		}
		jQuery("#slider").slider("values",1,value2);
		otsev();		
	});
});
	

  

//кнопка '+'
 $('.plus').click( function() { 
        var i=$(this).parents().eq(2).find('.counter').val();
        i=++i;
        $(this).parents().eq(2).find('.counter').val(i);	
		summa();
});

//ктопка '-'
 $('.minus').click(function() {
    var i = $(this).parents().eq(2).find('.counter').val();
    if (i >= 2)
        i = --i;
    $(this).parents().eq(2).find('.counter').val(i);
	summa();
    });
	
//ввод с клавиатуры числа
 $('.counter').keyup(function(){
	summa();
 });
 
 //проверка на удаление кол-ва либо копирование при помощи мыши
 $('.counter').mouseleave(function(){
	if ($(this).val()==''){
		$(this).val(0);summa();}
	else {summa()}
 });



$(document).ready(function(){ if ( $("#attr_1").html() == '') {$(".attr_1").css('display','none');}});
$(document).ready(function(){ if ( $("#attr_2").html() == '') { $(".attr_2").css('display','none');}});
$(document).ready(function(){ if ( $("#attr_3").html() == '') { $(".attr_3").css('display','none');}});
$(document).ready(function(){ if ( $("#Art").html() == '') { $(".Art").css('display','none');}});

		
		$('.addToFavourite').mouseover(function(){$(this).find('.imgStar_1').hide();$(this).find('.imgStar_2').show();});
		$('.addToFavourite').mouseout(function(){$(this).find('.imgStar_2').hide();$(this).find('.imgStar_1').show();});
		$('.addToFavourite').click(function(){$(this).hide();$(this).parent().find('.favStar').show();});

		$('.favStar').mouseover(function(){$(this).css("height", "33px");$(this).attr("src","IMG/star_3.png")});
		$('.favStar').mouseout(function(){$(this).css("height", "26px");$(this).attr("src","IMG/star_2.png")});
		$('.favStar').click(function(){
			$(this).hide();
			$(this).attr("src","IMG/star_2.png")
			$(this).parent().find('.addToFavourite').show();
			$(this).parent().find('.imgStar_1').show();
		});


$('.plus, .minus, .addToCart, .addToFavourite, .favStar, #SButton').mouseover(function(){$(this).css("cursor", "pointer");});

$('#priceDiapazone').mouseover(function(){$(this).addClass("priceDiapazoneFocus"); $(this).removeClass("priceDiapazone");$('#rub').addClass("rubFocus"); $('#rub').removeClass('rub');});
$('#priceDiapazone').mouseout(function(){$(this).addClass('priceDiapazone'); $(this).removeClass('priceDiapazoneFocus');$('#rub').addClass('rub'); $('#rub').removeClass('rubFocus');});
$('#priceDiapazone').mouseover(function(){$('.field_1').css("marginLeft", "19px")});
$('#priceDiapazone').mouseout(function(){$('.field_1').css("marginLeft", "20px");});
$('#SButton').mouseover(function(){$(this).css({"backgroundColor":"#1F56CE", "color":"#fff"})});
$('#SButton').mouseout(function(){$(this).css({"backgroundColor":"#fff", "color":"#1F56CE"})});

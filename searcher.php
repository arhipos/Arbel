<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ - канцелярия
    </title>
	<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
	<script src="JS/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="JS/jquery.ui-slider.js"></script>
    <script type="text/javascript" src="JS/jquery.fancybox.js"></script>
	<script type="text/javascript" src="JS/counter.js"></script>
	
    <link rel="stylesheet" type="text/css" href="CSS/searcher.css"/>
    <link rel="stylesheet" href="CSS/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
</head>
<?php require("header.php") ?>

<div class="searcherBody">
<div class="SearchOptions">
	<div class="priceDiapazone" id="priceDiapazone"><div id="rub" class="rub">Цена, руб.</div>
		<span  class="field_1">от <input type="text"  onfocus="this.value=''" onblur="if (this.value=='') this.value=Minimum" id="minCost" class="minCost"/></span>
		<span class="field_2">до <input type="text" onfocus="this.value=''" onblur="if (this.value=='') this.value=Maximum" id="maxCost" class="maxCost" ></span>
		<div class="" id="slider"></div>
	</div>
</div>
    <div class="stockBox">
		<div class="boxHead">
			<span class="sort">Сортировать по:</span>
		</div>
		<div class="boxElement">
			<div class="imgSlot">	
				<a class="fancybox" href="IMG/examplePen.jpg" title="Увеличить">
					<img src="IMG/examplePen.jpg"/>
				</a>
			</div>
			<div class="name_attr">
				<div class="nameSlot">
					<a href ="...карточка товара">Pilot Grip синий гелевый </a>
				</div>
				<div class="attr">
					<ul>
						<li class="attr_1">Цвет:<span id="attr_1">синий</span> </li>
						<li class="attr_2">Толщина письма:<span id="attr_2">0.5мм</span></li>
						<li class="attr_3"><span id="attr_3">Резиновый манжет</span></li>
						<li class="Art">Артикул:<span id="Art">211</span></li>
					</ul>
				</div>
				<div class="ostatok">
				Остаток:  под заказ
				</div>
			</div>
			<div class="fav_cart" id="fav_cart">
				<button class="addToFavourite" >
					<img  class="imgStar_1" src="IMG/star_1.png"  > <img  class="imgStar_2" src="IMG/star_2.png"  >   В избранное
				</button>
				<img  class="favStar_2" src="IMG/star_2.png"  ><img  class="favStar_3" src="IMG/star_3.png"  >
				<div class="toCart">
					<input class="plus" type="button" value="+" onclick="inc()"/>
					<input  id="counter" type="text" size="1" value="1" onmouseout="$('#summaSlot').val($('#counter').val()*34)"/>
					<input class="minus" type="button" value="-" onclick="dec()" /> 
					<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript">
    $(document).ready(function(){ if ( $("#attr_1").html() == '') {$(".attr_1").css('display','none');}});
    $(document).ready(function(){ if ( $("#attr_2").html() == '') { $(".attr_2").css('display','none');}});
	$(document).ready(function(){ if ( $("#attr_3").html() == '') { $(".attr_3").css('display','none');}});
	$(document).ready(function(){ if ( $("#Art").html() == '') { $(".Art").css('display','none');}});
$('.addToFavourite').mouseover(function(){$('.addToFavourite').css("cursor", "pointer");$('.imgStar_1, .favStar_2, .favStar_3').hide();$('.imgStar_2').show();});
$('.addToFavourite').mouseout(function(){$('.imgStar_2').hide();$('.imgStar_1').show();});
$('.addToFavourite').click(function(){$('.addToFavourite').hide();$('.favStar_2').show();});

$('.favStar_2').mouseover(function(){$('.favStar_2').css("cursor", "pointer");$('.favStar_2').hide();$('.favStar_3').show();});
$('.favStar_3').mouseover(function(){$('.favStar_3').css("cursor", "pointer");$('.favStar_2').hide();});
$('.favStar_3').mouseout(function(){$('.favStar_3').hide();$('.favStar_2').show();});
$('.favStar_3').click(function(){$('.addToFavourite').show();$('.imgStar_1').show();});

$('.plus, .minus, .addToCart').mouseover(function(){$('.plus, .minus, .addToCart').css("cursor", "pointer");});
$('#priceDiapazone').mouseover(function(){$('#priceDiapazone').addClass('priceDiapazoneFocus'); $('#priceDiapazone').removeClass('priceDiapazone');$('#rub').addClass('rubFocus'); $('#rub').removeClass('rub');});
$('#priceDiapazone').mouseout(function(){$('#priceDiapazone').addClass('priceDiapazone'); $('#priceDiapazone').removeClass('priceDiapazoneFocus');$('#rub').addClass('rub'); $('#rub').removeClass('rubFocus');});
$('#priceDiapazone').mouseover(function(){$('.field_1').css("marginLeft", "19px")});
$('#priceDiapazone').mouseout(function(){$('.field_1').css("marginLeft", "20px");});
var Minimum=0;
var Maximum=1000;
document.getElementById("maxCost").value=Maximum;
document.getElementById("minCost").value=Minimum;

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
    }
	
});


jQuery("input#minCost").change(function(){
	var value1=jQuery("input#minCost").val();
	var value2=jQuery("input#maxCost").val();
	min=value1;
    if(parseInt(value1) > parseInt(value2)){
		value1 = value2;
		jQuery("input#minCost").val(value1);
	}
	jQuery("#slider").slider("values",0,value1);	
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
});


</script>
</html>
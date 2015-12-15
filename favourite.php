<!DOCTYPE HTML PUBLIC>
<html>
<head>

    <title>
        АРБЕЛ - канцелярия
    </title>
<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
<script src="JS/jquery-2.1.3.js"></script>
<script type="text/javascript" src="JS/jquery.fancybox.js"></script>
<script type="text/javascript" src="JS/counter.js"></script>
 <script type="text/javascript" src="JS/jquery-ui-1.8.16.custom.min.js"></script>

<link rel="stylesheet" href="CSS/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
<link rel="stylesheet" type="text/css" href="CSS/favourite.css"/>


<?php require("header.php") ?>

<div class="favBody">
	<div class="leftBlock">
		<div class="emtyBox">
			<img src="IMG/star_2.png"><div class="emtyText">Ваша корзина пуста</div>
		</div>
		<div class="stockBox">
			<div class="boxHead">
				<span class="sort">Сортировать по:</span>
			</div>
			<div class="boxElement" id="element1">
				<div class="imgSlot">	
					<a class="fancybox" href="IMG/examplePen.jpg" title="Увеличить">
						<img src="IMG/examplePen.jpg"/>
					</a>
				</div>
				<div class="name_price">
					<div class="nameSlot">
						<a href ="...карточка товара">Pilot Grip синий гелевый </a>
					</div>
					<div class="priceSlot" > 
						Цена<span id="priceSlot"> 34,54</span> руб. 
					</div>
					<div class="ostatok" style="color:red">
					Под заказ(2-3дня)
					</div>
				</div>			
				<div class="countElemnt">
						<input class="plus" type="button" value="+" onclick="inc()"/>
						<input  id="counter" type="text" size="1" value="1" onmouseout="$('#summaSlot').val($('#counter').val()*34)"/>
						<input class="minus" type="button" value="-" onclick="dec()" /> 							
					<div class="sumElement">= <span id="sumElement">34,54</span> руб</div>
					<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div>
				<div class="deleteElement">
					<input class="deleteThis" id="deleter" type="button"  onclick="deleteElem()"/>
				</div>
			</div>
			<div class="boxElement" id="element2">
				<div class="imgSlot">	
					<a class="fancybox" href="IMG/example2.jpg" title="Увеличить">
						<img src="IMG/example2.jpg"/>
					</a>
				</div>
				<div class="name_price">
					<div class="nameSlot">
						<a href ="...карточка товара">Калькулятор Citizen </a>
					</div>
					<div class="priceSlot" > 
						Цена<span id="priceSlot"> 728</span> руб. 
					</div>
					<div class="ostatok" style="color:green">
					 В наличии 
					</div>
				</div>			
				<div class="countElemnt">
					<input class="plus" type="button" value="+" onclick="inc()"/>
					<input  id="counter" type="text" size="1" value="1" onmouseout="$('#summaSlot').val($('#counter').val()*34)"/>
					<input class="minus" type="button" value="-" onclick="dec()" /> 							
				<div class="sumElement">= <span id="sumElement">728</span> руб</div>
				<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div>
				<div class="deleteElement">
					<input class="deleteThis" type="button"  onclick="deleteElem2()"/>
				</div>
			</div>
		</div>
	</div>
	<div class="rightBlock">
		<div class="corzina"> <a href="cart.php" >Корзина </a></div>
		<!-- Для зарегистрированных пользователей-->
		<div class="Fav"  ><a href="favourite.php" ><img src="IMG/izbrannoe_1.png"> </a></div> 
		<div class="Sal"><a href="sale.php" >Скидки/История </a></div>  		
		<div class="Opt"  >  <a href="options.php" >Настройки </a></div>                                                  				
	</div>
</div>
</body>

<script type="text/javascript">
	 if ($(".stockBox").css("height") == $(".boxHead").css("height") ) {
		 $(".stockBox").css("visibility", "hidden");
		 $(".emtyBox").fadeIn()
		 };
	function deleteElem(){
		$("#element1").animate({height:"0",opacity:"0"}, {duration: 500, specialEasing: { height: 'linear'}})};
	function deleteElem2(){$.when(
		$("#element2").animate({height:"0",opacity:"0"}, {duration: 500, specialEasing: { height: 'linear'}})).then(
		function(){
					if ( $( '.stockBox' ).has('.boxElement').css("height")<'10px' ) {}
					else{	$(".stockBox, .submitCartButton").css("display", "none");
						$(".emtyBox").fadeIn()
																}
				});	
	};
	
</script>

</html>
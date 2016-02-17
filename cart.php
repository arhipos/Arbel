<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ - канцелярия
    </title>
	
	<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
<script src="JS/jquery-2.1.3.js"></script>
<script type="text/javascript" src="JS/jquery.ui-slider.js"></script>
 <script type="text/javascript" src="JS/jquery.fancybox.js"></script>
  <script type="text/javascript" src="JS/jquery-ui-1.8.16.custom.min.js"></script>


    <link rel="stylesheet" href="CSS/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/cart.css"/>
	<link rel="stylesheet" type="text/css" href="CSS/table.css"/>
	<link rel="stylesheet" type="text/css" href="CSS/rightBlock.css"/>
</head>



<?php require("header.php"); ?>
<div class="CFBody">
	<div class="leftBlock">
		<div class="emtyBox">
			<img src="IMG/emtyCart.jpg"><div class="emtyText">Ваша корзина пуста</div>
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
				<div class="name_price" >
					<div class="nameSlot">
						<a href ="...карточка товара">Pilot Grip синий гелевый </a>
					</div>
					<div class="priceEd" > 
						Цена<span class="priceSlot"> 34,54</span> руб. 
					</div>
					<div class="ostatok">
					Остаток:  под заказ
					</div>
				</div>			
				<div class="countElement">
						<input class="plus"  type="button" value="+" />
						<input  class="counter" type="text" size="1" value="1" />
						<input class="minus" type="button" value="-"  /> 							
					<div class="sum">= <span  id="sumElement" ></span> руб
					</div>
				</div>
				<div class="deleteElement">
					<input class="deleteThis" type="button"  />
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
					<div class="priceEd" > 
						Цена<span  class="priceSlot"> 728</span> руб. 
					</div>
					<div class="ostatok">
					Остаток:  в наличии 
					</div>
				</div>			
				<div class="countElement">
					<input class="plus"  type="button" value="+" />
					<input  class="counter"  type="text" size="1" value="1"/>
					<input class="minus" type="button" value="-"  /> 							
				<div class="sum">= <span id="sumElement"  ></span> руб
				</div>
				</div>
				<div class="deleteElement" >
					<input class="deleteThis" type="button" />
				</div>
			</div>
			<div class="boxElement" id="element3">
				<div class="imgSlot">	
					<a class="fancybox" href="IMG/examplePen.jpg" title="Увеличить">
						<img src="IMG/examplePen.jpg"/>
					</a>
				</div>
				<div class="name_price">
					<div class="nameSlot">
						<a href ="...карточка товара">Pilot Grip синий гелевый </a>
					</div>
					<div class="priceEd" > 
						Цена<span class="priceSlot">32,12</span> руб. 
					</div>
					<div class="ostatok">
					Остаток:  под заказ
					</div>
				</div>			
				<div class="countElement">
						<input class="plus" type="button" value="+" />
						<input  class="counter" type="text" size="1" value="1" >
						<input class="minus" type="button" value="-"  /> 							
					<div class="sum">= <span id="sumElement"  ></span> руб
					</div>
				</div>
				<div class="deleteElement">
					<input class="deleteThis"  type="button" />
				</div>
			</div>			
			<div class="boxFooter">
				<div class="itog">
					Итого: <span class="itogNum"></span> руб.
				</div>
			</div>
		</div>
		<div class="submitCart">
			<input class="submitCartButton" type="button" value="Оформить заказ" onclick=""/>
		</div>
	</div>
	<div class="rightBlock">
	 <!-- Для незарегистрированных пользователей-->
		<div class="blockChose">
		<a href="cart.php" >
			<div  id="triangleBigTopCut"><div  id="triangleSmallTopCut"></div></div>
			<div  id="triangleBigBotCut"><div  id="triangleSmallBotCut"></div></div>		
			<div  id="triangleBigTop"><div  id="triangleSmallTop"></div></div>
			<div  id="triangleBigBot"><div  id="triangleSmallBot"></div></div>
			<div  id="rectangle"><span class="rectText">Корзина</span></div>
		</a>
		</div>
		<div class="dopFunc"> Допонительные функции доступны <a href="registration.php">зарегистрированым</a> пользователям</div>    
	<!-- Для ЗАрегистрированных пользователей-->		
		<div class="Fav"  ><a href="favourite.php" >Избранное </a></div>  
		<div class="Sal"><a href="sale.php" >Скидки/История </a></div>  		
		<div class="Opt"  >  <a href="options.php" >Настройки </a></div>                                                  				
	</div>
</div>

</body>
<script type="text/javascript" src="JS/counter.js"></script>
<script type="text/javascript">

$(".blockChose").mouseover(function(){$("#triangleBigTopCut, #triangleBigBotCut").css("border-left", "19px solid #9E9E9E")});
$(".blockChose").mouseout(function(){$("#triangleBigTopCut,#triangleBigBotCut").css("border-left", "19px solid white")});
if ($(".stockBox").css("height") < "140px" ) {
		 $(".stockBox").css("visibility", "hidden");
		 $(".emtyBox").fadeIn()
		 };
$('.deleteThis').click(function(){
	$(this).parents().eq(1).find('.counter').val(0);
	summa();
	$.when($(this).parents().eq(1).animate({height:"0",opacity:"0"}, {duration: 500, specialEasing: { height: 'linear'}})).then(
		function(){if ($(".stockBox").css("height") < "140px" ) {
				$(".stockBox, .submitCartButton").css("display", "none");
				$(".emtyBox").fadeIn();
				}
		 });});

</script>

</html>
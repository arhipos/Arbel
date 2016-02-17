<!DOCTYPE HTML PUBLIC>
<html>
<head>

    <title>
        АРБЕЛ - канцелярия
    </title>
<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
<script src="JS/jquery-2.1.3.js"></script>
<script type="text/javascript" src="JS/jquery.fancybox.js"></script>
 <script type="text/javascript" src="JS/jquery-ui-1.8.16.custom.min.js"></script>

<link rel="stylesheet" href="CSS/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
<link rel="stylesheet" type="text/css" href="CSS/favourite.css"/>
<link rel="stylesheet" type="text/css" href="CSS/table.css"/>
<link rel="stylesheet" type="text/css" href="CSS/rightBlock.css"/>
</head>

<?php require("header.php") ?>

<div class="CFBody">
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
					<div class="priceEd" > 
						Цена<span class="priceSlot"> 34.54</span> руб. 
					</div>
					<div class="ostatok" style="color:red">
					Под заказ(2-3дня)
					</div>
				</div>			
				<div class="countElemnt">
						<input class="plus" type="button" value="+" />
						<input  class="counter" type="text" size="1" value="1" />
						<input class="minus" type="button" value="-" /> 							
					<div class="sum">= <span  id="sumElement" ></span> руб</div>
					<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div>
				<div class="deleteElement">
					<input class="deleteThis" id="deleter" type="button"  />
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
						Цена<span class="priceSlot"> 728</span> руб. 
					</div>
					<div class="ostatok" style="color:green">
					 В наличии 
					</div>
				</div>			
				<div class="countElemnt">
					<input class="plus" type="button" value="+" />
					<input  class="counter" type="text" size="1" value="1" />
					<input class="minus" type="button" value="-" /> 							
				<div class="sum">= <span  id="sumElement" ></span> руб</div>
				<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div>
				<div class="deleteElement">
					<input class="deleteThis" type="button" />
				</div>
			</div>
		</div>
	</div>
	<div class="rightBlock">
		<div class="corzina"> <a href="cart.php" >Корзина </a></div>
		<!-- Для зарегистрированных пользователей-->
		<div class="blockChose">
		<a href="favourite.php" >
			<div  id="triangleBigTopCut"><div  id="triangleSmallTopCut"></div></div>
			<div  id="triangleBigBotCut"><div  id="triangleSmallBotCut"></div></div>		
			<div  id="triangleBigTop"><div  id="triangleSmallTop"></div></div>
			<div  id="triangleBigBot"><div  id="triangleSmallBot"></div></div>
			<div  id="rectangle"><span class="rectText">Избранное</span></div>
		</a>
		</div>
		<div class="Sal"><a href="sale.php" >Скидки/История </a></div>  		
		<div class="Opt"  >  <a href="options.php" >Настройки </a></div>                                                  				
	</div>
</div>
</body>
<script type="text/javascript" src="JS/counter.js"></script>
<script type="text/javascript">
$(".blockChose").mouseover(function(){$("#triangleBigTopCut, #triangleBigBotCut").css("border-left", "19px solid #9E9E9E")});
$(".blockChose").mouseout(function(){$("#triangleBigTopCut,#triangleBigBotCut").css("border-left", "19px solid white")});
$('.deleteThis').click(function(){
	$(this).parents().eq(1).find('.counter').val(0);
	summa();
	$(this).parents().eq(1).animate({height:"0",opacity:"0"}, {duration: 500, specialEasing: { height: 'linear'}})
});
	
</script>

</html>
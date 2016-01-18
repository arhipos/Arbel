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
<link rel="stylesheet" type="text/css" href="CSS/sale.css"/>
<link rel="stylesheet" type="text/css" href="CSS/rightBlock.css"/>
</head>
<?php require("header.php") ?>

<div class="favBody">
	<div class="leftBlock">
		<div class="salesBlock">
			<div class="history">
				Ваша история покупок
			</div>
			<div class="wTosale">
				Осталось до <span class="saleType">(тип)</span> скидки:
			</div>
			<div class="typesBlock">
				<div class="block1">
					<p>Виды:</p>
				<ul>
					<li>Bronze 2%</li>
					<li>Silver 5%</li>
					<li>Gold 7%</li>
					<li>Platinum 10%</li>
				</ul>	
				</div>
				<div class="block2">
					<p>Требуется:</p>
				<ul>
					<li><span class="saleSpan"> для получения купите товара на 10 000руб</span></li>
					<li><span class="saleSpan"> для получения купите товара на 20 000руб</span></li>
					<li><span class="saleSpan"> для получения купите товара на 50 000руб</span></li>
					<li><span class="saleSpan"> для получения купите товара на 100 000руб</span></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="rightBlock">
		<div class="corzina"> <a href="cart.php" >Корзина </a></div>
		<div class="Fav"><a href="favourite.php" >Избранное </a></div> 
		<div class="blockChose">
		<a href="sale.php" >
			<div  id="triangleBigTopCut"><div  id="triangleSmallTopCut"></div></div>
			<div  id="triangleBigBotCut"><div  id="triangleSmallBotCut"></div></div>		
			<div  id="triangleBigTop"><div  id="triangleSmallTop"></div></div>
			<div  id="triangleBigBot"><div  id="triangleSmallBot"></div></div>
			<div  id="rectangle"><span class="rectText">Скидки/История</span></div>
		</a>
		</div>	
		<div class="Opt"><a href="options.php" >Настройки </a></div>       																															
	</div>
</div>
</body>

<script type="text/javascript">
$(".blockChose").mouseover(function(){$("#triangleBigTopCut, #triangleBigBotCut").css("border-left", "19px solid #9E9E9E")});
$(".blockChose").mouseout(function(){$("#triangleBigTopCut,#triangleBigBotCut").css("border-left", "19px solid white")});
</script>

</html>
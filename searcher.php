<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ - канцелярия
    </title>
	<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
	<script src="JS/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="JS/jquery.fancybox.js"></script>
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/searcher.css"/>
    <link rel="stylesheet" href="CSS/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
</head>
<?php require("header.php") ?>

<div class="searcherBody">
<div class="SearchOptions">
	<div class="priceDiapazone" id="priceDiapazone">
		<div id="rub" class="rub">
			Цена, руб.
		</div>
		<span  class="field_1">от <input type="text"  onfocus="this.value=''" onblur="if (this.value=='') this.value=Minimum" id="minCost" class="minCost"/></span>
		<span class="field_2">до <input type="text" onfocus="this.value=''" onblur="if (this.value=='') this.value=Maximum" id="maxCost" class="maxCost" ></span>
		<div class="" id="slider"></div>
		<div class="SButton">
			<button id="SButton">
				Применить
			</button>
		</div>
	</div>
</div>
    <div class="stockBox">
		<div class="boxHead">
			<span class="sort">Сортировать по:</span>
		</div>
		<div class="boxElement" id="example1">
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
				<div class="priceEd" > 
						Цена<span class="priceSlot"> 34,54</span> руб. 
				</div>
			</div>
			<div class="fav_cart" id="fav_cart">
				<div class="cnopcaF">
					<button class="addToFavourite" >
						<img  class="imgStar_1" src="IMG/star_1.png"  > <img  class="imgStar_2" src="IMG/star_2.png"  >   В избранное
					</button>
					<img  class="favStar" src="IMG/star_2.png"  >
				</div>	
				<div class="sum">Итого <span id="sumElement"> </span> руб
				</div>
				<div class="toCart">
					<input class="plus" type="button" value="+"/>
					<input  class="counter" type="text" size="1" value="1"/>
					<input class="minus" type="button" value="-"  /> 
					<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div
			</div>
		</div>
	</div>
		<div class="boxElement" id="example2">
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
						<li class="Art">Артикул:<span id="Art">211</span></li>
					</ul>
				</div>
				<div class="ostatok">
				Остаток:  под заказ
				</div>
				<div class="priceEd" > 
						Цена<span class="priceSlot"> 27</span> руб. 
				</div>
			</div>
			<div class="fav_cart" id="fav_cart">
				<div class="cnopcaF">
					<button class="addToFavourite" >
						<img  class="imgStar_1" src="IMG/star_1.png"  > <img  class="imgStar_2" src="IMG/star_2.png"  >   В избранное
					</button>
					<img  class="favStar" src="IMG/star_2.png"  >
				</div>	
				<div class="sum">Итого <span id="sumElement"> </span> руб
				</div>
				<div class="toCart">
					<input class="plus" type="button" value="+"/>
					<input  class="counter" type="text" size="1" value="1"/>
					<input class="minus" type="button" value="-"  /> 
					<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div
			</div>
		</div>
	</div>
		<div class="boxElement" id="example3">
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
						<li class="Art">Артикул:<span id="Art">211</span></li>
					</ul>
				</div>
				<div class="ostatok">
				Остаток:  под заказ
				</div>
				<div class="priceEd" > 
						Цена<span class="priceSlot"> 800</span> руб. 
				</div>
			</div>
			<div class="fav_cart" id="fav_cart">
				<div class="cnopcaF">
					<button class="addToFavourite" >
						<img  class="imgStar_1" src="IMG/star_1.png"  > <img  class="imgStar_2" src="IMG/star_2.png"  >   В избранное
					</button>
					<img  class="favStar" src="IMG/star_2.png"  >
				</div>	
				<div class="sum">Итого <span id="sumElement"> </span> руб
				</div>
				<div class="toCart">
					<input class="plus" type="button" value="+"/>
					<input  class="counter" type="text" size="1" value="1"/>
					<input class="minus" type="button" value="-"  /> 
					<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div
			</div>
		</div>
	</div>
		<div class="boxElement" id="example4">
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
				<div class="priceEd" > 
						Цена<span class="priceSlot"> 100</span> руб. 
				</div>
			</div>
			<div class="fav_cart" id="fav_cart">
				<div class="cnopcaF">
					<button class="addToFavourite" >
						<img  class="imgStar_1" src="IMG/star_1.png"  > <img  class="imgStar_2" src="IMG/star_2.png"  >   В избранное
					</button>
					<img  class="favStar" src="IMG/star_2.png"  >
				</div>	
				<div class="sum">Итого <span id="sumElement"> </span> руб
				</div>
				<div class="toCart">
					<input class="plus" type="button" value="+"/>
					<input  class="counter" type="text" size="1" value="1"/>
					<input class="minus" type="button" value="-"  /> 
					<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div
			</div>
		</div>
	</div>
		<div class="boxElement" id="example5">
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
				<div class="priceEd" > 
						Цена<span class="priceSlot"> 66</span> руб. 
				</div>
			</div>
			<div class="fav_cart" id="fav_cart">
				<div class="cnopcaF">
					<button class="addToFavourite" >
						<img  class="imgStar_1" src="IMG/star_1.png"  > <img  class="imgStar_2" src="IMG/star_2.png"  >   В избранное
					</button>
					<img  class="favStar" src="IMG/star_2.png"  >
				</div>	
				<div class="sum">Итого <span id="sumElement"> </span> руб
				</div>
				<div class="toCart">
					<input class="plus" type="button" value="+"/>
					<input  class="counter" type="text" size="1" value="1"/>
					<input class="minus" type="button" value="-"  /> 
					<input class="addToCart" type="button" value="В корзину" onclick=""/>
				</div
			</div>
		</div>
	</div>	
</div>
</body>
 <script type="text/javascript" src="JS/searcher.js"></script>

</html>
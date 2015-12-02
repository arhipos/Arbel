<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ - канцелярия
    </title>

    <link rel="stylesheet" type="text/css" href="CSS/tovForm.css"/>
    <script type="text/javascript" src="JS/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" href="CSS/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<?php require("header.php") ?>
<div class="tovForm">
    <div class="photo" >
         <a class="fancybox"  href="img/examplePen.jpg" title="Увеличить" >             <!-- каритнка товара-->
          <img  src="img/examplePen.jpg"   /></a>
    </div>
    <div class="categoryPath">
        <a   href="..." > тут нужно указать назв выбранной категор/</a>
        <a   href="..." >  здесь назв подкатегории </a>
    </div>
    <div class="Name">Ручка Pilot grip Pro </div>                                       <!-- сюда Название-->
    <div class="Discription"> Ручка гелевая синего цвета с резиновым держателем ширина письма 0,7 мм произведено в России</div>
    <div class="Param">
        <li class="size">Размеры:<span id="size">a</span> </li>
        <li class="weight">Вес:<span id="weight">0,0кг</span></li>
        <li class="Ed">Единица:<span id="Ed">шт</span></li>
        <li class="Art">Артикул:<span id="Art"> 1437</span></li>
    </div>
    <div class="addToFavourite"> <input class="favouriteB" type="button" value="В избранное" onclick="" ></div>
    <div class="pusto"></div>
    <div class="addToCart">
        <span id="priceSlot">34,54 руб.</span>
        <input class="plus" type="button" value="+" onclick="inc()">
         <input  id="counter" type="text" size="1" value="2" onmouseout="$('#summaSlot').val($('#counter').val()*34)">
        <input class="minus" type="button" value="-" onclick="dec()" >
        <input class="submit1" type="submit" value="В корзину">
    </div>



</div>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
    function inc(){
        var i=$('#counter').val();
        i=++i;
        $('#counter').val(i);
        $('#summaSlot').val($('#counter').val()*34)
    }
    function dec() {
        var i = $('#counter').val();
        if (i >= 1)
            i = --i;
        $('#counter').val(i);
        $('#summaSlot').val($('#counter').val()*34)
    }
    $('#summaSlot').val($('#counter').val()*34);


    $(document).ready(function(){ if ( $("#size").html() == '') {$(".size").css('visibility','hidden')}});
    $(document).ready(function(){ if ( $("#weight").html() == '') {
        $(".weight").css('display','none');
        $(".pusto").css('display','block')
    }});

</script>

</html>
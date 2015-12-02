<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ - канцелярия
    </title>
    <link rel="stylesheet" type="text/css" href="CSS/searcher.css"/>
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<?php require("header.php") ?>
<div class="fon_opt_fav_cart">
    <div class="tablica"><table  bordercolor="black" border="2" >                                         <!-- таблица с товарами корзины-->
        <tbody>                                                                                                             <!-- Список с товарами -->
        <tr>
            <td class="imgSlot" rowspan="2"> <a class="fancybox"  href="img/examplePen.jpg" title="Увеличить" >             <!-- каритнка товара-->
                <img  src="img/examplePen.jpg"   /></a></td>
            <td class="nameSlot"> <a  href="...карточка товара" >Pilot Grip синий гелевый </a></td>                         <!-- название товара-->
            <td>                                                                                                            <!-- количество товара-->
                <input class="plus" type="button" value="+" onclick="inc()">
                <input  id="counter" type="text" size="1" value="2" onmouseout="$('#summaSlot').val($('#counter').val()*34)">
                <input class="minus" type="button" value="-" onclick="dec()" >
                </br> <input id="summaSlot" type="text" value="" size="auto">руб
            </td>
            <td >  <input class="deleteBlock" type="button" value="X" ></td>                                                                                           <!-- удалить блок-->
        </tr>
        <tr class="sec">
            <td class="priceSlot"><span id="priceSlot">34,54</span> <b>руб. </b> за штуку</td>                               <!-- цена за штуку-->
            <td class="ToCart" >                                                                                         <!-- суммарная стоимость данного товара-->
                <input id="ToCart" type="button" value="В корзину"  >
            </td>
        </tr>
        <tr class="rasd"><td class="rasd" colspan="4"></td></tr>

        <!---2й блок-->
        <tr>
            <td class="imgSlot" rowspan="2"> <a class="fancybox"  href="img/examplePen.jpg" title="Увеличить" >             <!-- каритнка товара-->
                <img  src="img/examplePen.jpg"   /></a></td>
            <td class="nameSlot"> <a  href="...карточка товара" >Pilot Grip синий гелевый </a></td>                         <!-- название товара-->
            <td>                                                                                                            <!-- количество товара-->
                <input class="plus" type="button" value="+" onclick="inc()">
                <input  id="counter" type="text" size="1" value="2" onmouseout="$('#summaSlot').val($('#counter').val()*34)">
                <input class="minus" type="button" value="-" onclick="dec()" >
                </br> <input id="summaSlot" type="text" value="" size="auto">руб
            </td>
            <td >  <input class="deleteBlock" type="button" value="X" ></td>                                                                                           <!-- удалить блок-->
        </tr>
        <tr class="sec">
            <td class="priceSlot"><span id="priceSlot">34,54</span> <b>руб. </b> за штуку</td>                               <!-- цена за штуку-->
            <td class="ToCart" >                                                                                         <!-- суммарная стоимость данного товара-->
                <input id="ToCart" type="button" value="В корзину"  >
            </td>
        </tr>
        <tr class="rasd"><td class="rasd" colspan="4"></td></tr>
        </tbody>
        <tfoot>                                                                                                             <!-- подитог корзины-->
        <tr>
            <td class="footCount" >Всего</td>
            <td><b>N</b> товаров</td>
            <td class=""><b> 726,30</b> руб</td>
        </tr>
        <tr>
            <td ></td><td ><input class="submit1" type="submit" value="Оформить"></td>
            <td  ></td>

        </tr>
        </tfoot>
    </table></div>
    <div class="cart_m"  ><a href="Cart.php" >корзина </a></div>
    <div class="izbrannoe_m"><img src="img/izbrannoe_1.png"></div>
    <div class="Opt_m"  >  <a href="Options.php" >Настройки </a></div>

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
</script>
</html>
<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ - канцелярия
    </title>

    <link rel="stylesheet" type="text/css" href="CSS/options.css"/>
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	
	<?php require("header.php") ?>
<div class="fon_opt_fav_cart">
    <div class="optionsBlock">
        <div class="changeParol">
            <h2>Изменить пароль</h2>
            <form autocomplete="off" id="form_changePassword" action="register.php" method="POST">
                <p>Старый пароль:</p>
                <input  name="pass" id="id_pass" type="password">
                <p>Новый пароль:</p>
                <input  name="new_pass" id="id_new_pass" type="password">
                <p></p>
                <input type="submit" id="SubmitChangePas" value="Изменить">
            </form>
            <p class="error" id="pass_text"></p>
            <div class="podpiska">
                <h3>Подписка на новости</h3>
                <input type="radio" id="id_podpiska" value="">Подписаться
            </div>
        </div>
        <div class="PersonalContacts">
            <h2>Контакты</h2>
            <form autocomplete="off" id="form_ChangeUserData" action="register.php" method="POST">
                <p>ИНН:</p>
                <input name="inn" id="id_inn" type="text">
                <p>Контактное лицо:</p>
                <input name="contact" id="id_contact" type="text">
                <p>Телефон</p>
                <input name="telephone" id="id_telephone" type="text">
                <p>Адрес доставки:</p>
                <input name="adress" id="id_adress" type="text">
                <p></p>
                <input type="submit" id="SubmitChangesData" value="Изменить">
            </form>
            <p class="error" id="pass_text"></p>
        </div>
    </div>
    <div class="cart_m"  ><a href="Cart.php" >Корзина </a></div>
    <div class="izbrannoe_m"><a href="Favourite.php" >Избранное </a></div>
    <div class="Opt_m"  >  <img src="img/options_1.png"></div>

</div>
</body>
<script type="text/javascript" src="js/header.js "></script>


</html>
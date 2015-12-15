<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ - канцелярия
    </title>
<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
<script src="JS/jquery-1.6.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
<link rel="stylesheet" type="text/css" href="CSS/options.css"/>


	
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
	<div class="rightBlock">
	 <!-- Для незарегистрированных пользователей-->
		<div class="corzina"><a href="cart.php" >Корзина</a></div>  
	<!-- Для ЗАрегистрированных пользователей-->		
		<div class="Fav"  ><a href="favourite.php" >Избранное </a></div>  
		<div class="Sal"><a href="sale.php" >Скидки/История </a></div>  		
		<div class="Opt"  >  <a href="options.php" ><img src="IMG/options_1.png"> </a></div>                                                  				
	</div>
</div>
</body>
<script type="text/javascript" src="js/header.js "></script>


</html>
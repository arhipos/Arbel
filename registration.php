<!DOCTYPE HTML PUBLIC>
<html>
<head>
<title>
АРБЕЛ- канцелярия
</title>
<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
<script src="JS/jquery-1.6.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/registration.css"/>
<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
<?php require("header.php") ?>

<div class="registration">
	<div class="reg_help">Поля отмеченные * обязательны для </br>заполнения</div>
	<div class="reg_form" >
			<h2>Вход</h2>
			<form autocomplete="off" id="form_reg" action="register.php" method="POST">
                    <p>Электронаая почта:</p>
                    <input  name="email" id="id_email" type="email">
                    <p>Пароль:</p>
                    <input  name="pass" id="id_pass" type="password">
                    <p>Повторите пароль:</p>
                    <input  name="pass_confirm" id="id_pass_confirm" type="password">
					<p>ИНН:</p>
					<input name="inn" id="id_inn" type="text">
					<p>Контактное лицо:</p>
					<input name="contact" id="id_contact" type="text">
					<p>Телефон</p>
					<input name="telephone" id="id_telephone" type="text">
					<p>Адрес доставки:</p>
					<input name="adress" id="id_adress" type="text">
                    <p>Введите сумму:</p>
                    <span id="aspm"></span>
                    <input  name="md5" id="kaptha">
                    <p></p>
                    <input type="submit" id="go_next" value="Готово">
                    </form>
                    <p class="error" id="pass_text"></p>
    </div>
	<div class="reg_error"> </div>
</div>

</body>
</html>
<!DOCTYPE HTML PUBLIC>
<html>
<head>
<title>
АРБЕЛ- канцелярия
</title>
<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
<script src="JS/jquery-2.1.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="CSS/registration.css"/>
<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
<?php require("header.php") ?>

<div class="registration">
	<div class="reg_form" >
			<div class="zagl">Вход</div>
			<form autocomplete="off" id="form_reg" action="register.php" method="POST">
                    <p>Электронаая почта:</p>
                    <input  name="email" id="id_email" type="email" >
                    <p>Пароль:</p>
                    <input  name="pass" id="id_pass" type="password">
                    <p>Повторите пароль:</p>
                    <input  name="pass_confirm" id="id_pass_confirm" type="password">
					<p><span class="zv1">*</span> ИНН:</p>
					<input name="inn" id="id_inn" type="text">
					<p>Контактное лицо:</p>
					<input name="contact" id="id_contact" type="text">
					<p>Телефон</p>
					<input name="telephone" id="id_telephone" type="text">
					<p><span class="zv1">*</span>Адрес доставки:</p>
					<input name="adress" id="id_adress" type="text">
                    <p>Введите слово с картинки:</p>
                    <div class="cap">
						<input name="code" type="text" id="code">
						<div class="refImg">
						<img src="get_captcha.php" alt="" id="captchaImg" />	<img src="IMG/refresh.jpg"  alt="" id="refresh" />
						</div>
					</div>	
                    <p></p>
                    <input type="submit" id="go_next" value="Готово" >
                    </form>
    </div>
	<div class="error">
		<div id="rhelp"><span class="zv">*</span> —  не обязательное поле</div>
		<div id="emailError"></div>
		<div id="passError"></div>
		<div id="pass2Error"></div>
		<div id="innError"></div>
		<div id="contError"></div>
		<div id="telError"></div>
		<div id="adrError"></div>
		<div id="capError"></div>
	</div>
</div>
<script src="JS/registration.js"></script>
</body>
</html>
<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ- канцелярия
    </title>
	<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
	<script src="JS/jquery-1.6.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/login.css"/>

<?php require("header.php") ?>
    <div class="login">
        <div class="login_form" >
            <h2>Вход</h2>
            <form autocomplete="off" id="form_reg" action="register.php" method="POST">
                <p>Электронаая почта:</p>
                <input  name="email" id="id_email" type="email">
                <p>Пароль:</p>
                <input  name="pass" id="id_pass" type="password">

                <p></p>
				<a href="forgotPass.php">Забыли пароль?</a>
                <input type="submit" id="go_next" value="Войти">
            </form>
            <p class="error" id="pass_text"></p>
        </div>
        <div class="reg_info">Информация о бонус регистрации отображается ТуТ </div>


    </div>
    </body>
</html>
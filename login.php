<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ- канцелярия
    </title>
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
                <input type="submit" id="go_next" value="Войти">
            </form>
            <p class="error" id="pass_text"></p>
        </div>
        <div class="reg_info">Информация о бонус регистрации отображается ТуТ </div>


    </div>
    </body>
</html>
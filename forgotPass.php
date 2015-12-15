<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>
        АРБЕЛ- канцелярия
    </title>
	<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
	<script src="JS/jquery-1.6.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/forgotPass.css"/>
</head>
<?php require("header.php") ?>
    <div class="restore">
        <div class="login_form" >
            <h2>Восстановление пароля</h2>
            <form autocomplete="off" id="form_restore" action="register.php" method="POST">
                <p>Email:</p>
                <input  name="email" id="id_email" type="email">					
                <input type="submit" id="go_next" class="submit1" value="Продолжить">
            </form>
            <p class="error" id="pass_text"></p>
        </div>


    </div>
    </body>
</html>
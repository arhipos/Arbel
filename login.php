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
                <p id="message">Электронаая почта:</p>
                <input  name="email" id="id_email" type="email">
                <p>Пароль:</p>
                <input  name="pass" id="id_pass" type="password">

                <p></p>
				<a href="forgotPass.php">Забыли пароль?</a>
                <input type="submit" id="go_next" value="Войти" onClick="ValidMail()" >
            </form>
            <div id="error" id="pass_text"></div>
        </div>
        <div class="reg_info">Информация о бонус регистрации отображается ТуТ </div>


    </div>
    </body>
<script type="text/javascript">
function ValidMail() {
    var re = /^[\w-\.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/i;
    var myMail = document.getElementById('id_email').value;
    var valid = re.test(myMail);
    if (valid) {
			output = '';
		$( function() {
			$('form').submit(function() {
			return true;
			});
		});			
	}
    else {
		output = 'Введен не допустимый адрес!';
		$( function() {
			$('form').submit(function() {
			return false;
			});
		});
	}
    document.getElementById('error').innerHTML = output;
    return valid;
}

</script>
</html>
<!DOCTYPE HTML PUBLIC>
<html>
<head>

    <title>
        АРБЕЛ - канцелярия
    </title>
<meta http-equiv="Content-Type" content="text/html; Charset=utf-8"/>
<script src="JS/jquery-2.1.3.js"></script>
<script type="text/javascript" src="JS/jquery.fancybox.js"></script>
<script type="text/javascript" src="JS/counter.js"></script>
 <script type="text/javascript" src="JS/jquery-ui-1.8.16.custom.min.js"></script>

<link rel="stylesheet" href="CSS/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
<link rel="stylesheet" type="text/css" href="CSS/favourite.css"/>
<link rel="stylesheet" type="text/css" href="CSS/rightBlock.css"/>
</head>

<?php require("header.php") ?>

<div class="feedBody">

<form method="POST" id="feedback-form">
Как к Вам обращаться:
<input type="text" name="nameFF" required placeholder="фамилия имя отчество" x-autocompletetype="name">
Email для связи:
<input type="email" name="contactFF" required placeholder="адрес электронной почты" x-autocompletetype="email">
Ваше сообщение:
<textarea name="messageFF" required rows="5"></textarea>
<input type="submit" value="отправить">
</form>

</div>
</body>

<script type="text/javascript">

</script>

</html>
<?php
/**
 * Created by PhpStorm.
 * User: dwliv
 * Date: 01.02.2016
 * Time: 15:26
 */
require '../functions.php';
if(isRegistred($_POST['login'],$_POST['email'],$_POST['password'],$_POST['name'])){
    echo "1";
}else{
    echo "3";
}
exit();

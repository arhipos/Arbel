<?php
/**
 * Created by PhpStorm.
 * User: dwliv
 * Date: 01.02.2016
 * Time: 15:19
 */
require '../functions.php';
if(Login($_POST['username'],$_POST['password'])){
    echo "1";
}else{
    echo "3";
}
exit();
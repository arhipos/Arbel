<?php
/**
 * Created by PhpStorm.
 * User: dwliv
 * Date: 01.02.2016
 * Time: 20:38
 */
SetCookie("sessionid", "", time() - 3600*24*30*12,"/","arcanone.com",0);
SetCookie("arcid", "", time() - 3600*24*30*12,"/","arcanone.com",0);
exit();

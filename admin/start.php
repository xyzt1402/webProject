<?php
    ini_set('display_errors','On');

    define('APP_ROOT',__DIR__);
    define('VIEW_ROOT', APP_ROOT . '/views');
    define('MODEL_ROOT',APP_ROOT . '/model');

    define('PORT','80');
    define('BASE_URL','http://localhost:' . PORT . '/myweb/webProject/admin');
    define('BASE_VIEW',BASE_URL . '/views/');

    $db=new PDO('mysql:host=localhost:3306; dbname=webproject; charset=utf8','root','');
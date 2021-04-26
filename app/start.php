<?php
    session_start();
    ini_set('display_errors','On');

    define('APP_ROOT',__DIR__);
    define('VIEW_ROOT', APP_ROOT . '/views');
    define('MODEL_ROOT',APP_ROOT . '/model');

    define('PORT','80');
    define('BASE_URL','http://localhost:' . PORT . '/myweb/webProject');
    define('BASE_VIEW',BASE_URL . '/app/views/');

    $db=new PDO('mysql:host=localhost:3306; dbname=webproject; charset=utf8','webprojectUser','user123');
?>
<script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>
<script>
    var gAuth = null;
    function init() {
        gapi.load('auth2', function () {
            gAuth = gapi.auth2.init({
                clientId:'1085052625738-h42e3k7i5lqdvvujhi4f7bbr8i1la8hs.apps.googleusercontent.com'
            });
        });
    }
</script>
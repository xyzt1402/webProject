<?php
    $db = new PDO('mysql:host=localhost:3306; dbname=webproject; charset=utf8', 'webprojectUser', 'user123');

    if (isset($_POST['id'])){
        $deletePage=$db->prepare("
            DELETE FROM pages
            WHERE id = :id
        ");
    }
    $deletePage->execute(['id'=>$_POST['id']]);
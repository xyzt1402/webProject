<?php
    $db = new PDO('mysql:host=localhost:3306; dbname=webproject; charset=utf8', 'root', '');

    if (isset($_POST['id'])){
        $deletePage=$db->prepare("
            DELETE FROM comments
            WHERE id = :id
        ");
    }
    $deletePage->execute(['id'=>$_POST['id']]);
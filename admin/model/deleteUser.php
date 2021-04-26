<?php
    $db=new PDO('mysql:host=localhost:3306; dbname=webproject; charset=utf8','webprojectAdmin','admin123');

    if (isset($_POST['id'])) {
        $deletePage = $db->prepare("
                DELETE FROM user
                WHERE id = :id
            ");
        $deletePage->execute(['id' => $_POST['id']]);
    }

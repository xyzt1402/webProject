<?php
    require '../start.php';
    if (isset($_GET['id'])){
        $deletePage=$db->prepare("
            DELETE FROM user
            WHERE id = :id
        ");
    }
    var_dump($deletePage);
    $deletePage->execute(['id'=>$_GET['id']]);
    // header('Location: '. BASE_URL . '/UserList.php');
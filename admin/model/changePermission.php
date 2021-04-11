<?php
    ini_set('display_errors','On');
    $db=new PDO('mysql:host=localhost:3306; dbname=webproject; charset=utf8','root','');
    if (isset($_POST)){
        $id = $_POST['id'];
        $permission = $_POST['permission'];
        $update=$db->prepare("
            UPDATE user
            SET
                permission = :permission
            WHERE id = :id
        ");
        $update->execute([
            'id'=>$id,
            'permission' => $permission  
            ]);
            
    }
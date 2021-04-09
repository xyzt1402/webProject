<?php 
    $id = $page['userId'];
    $userInfo = $db->query("
        SELECT *
        FROM user
        WHERE id = '$id'
    ")->fetch(PDO::FETCH_ASSOC);
<?php
    $Users = $db->query("
        SELECT *
        FROM user
        ORDER BY id 
    ")->fetchAll(PDO::FETCH_ASSOC);
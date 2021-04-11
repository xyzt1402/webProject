<?php 
    $userPages = $db->query("
        SELECT id, title, label, url, topic, created
        FROM pages
        WHERE userID = '$id'
        ORDER BY id DESC
    ")->fetchAll(PDO::FETCH_ASSOC);
<?php
    $pages = $db->query("
        SELECT id, topic, title, url, created, view
        FROM pages
        ORDER BY id 
    ")->fetchAll(PDO::FETCH_ASSOC);

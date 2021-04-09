<?php
    $pages = $db->query("
        SELECT id, title, label, url, topic, created
        FROM pages
        ORDER BY id DESC
        LIMIT 5
    ")->fetchAll(PDO::FETCH_ASSOC);

<?php
    $popularPages = $db->query("
        SELECT id, title, label, url, topic, created, view
        FROM pages
        ORDER BY view DESC
        LIMIT 4
    ")->fetchAll(PDO::FETCH_ASSOC);
<?php
    $pages = $db->query("
        SELECT id, title, label, url, topic, created
        FROM pages
        ORDER BY id DESC
    ")->fetchAll(PDO::FETCH_ASSOC);

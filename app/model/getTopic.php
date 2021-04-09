<?php 
    $topicPages = $db->query("
        SELECT id, title, label, url, topic, created
        FROM pages
        WHERE topic = '$topic'
        ORDER BY id DESC
    ")->fetchAll(PDO::FETCH_ASSOC);
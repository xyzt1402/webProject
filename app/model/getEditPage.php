<?php
    $updatePage = $db->prepare("
            SELECT id, topic, title, url, label, body
            FROM pages
            WHERE id= :id
            LIMIT 1
        ");

    $updatePage->execute(['id' => $pageId]);

    $updatePage = $updatePage->fetch(PDO::FETCH_ASSOC);

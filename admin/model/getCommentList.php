<?php
    $comments = $db->query("
        SELECT *
        FROM comments
        ORDER BY pageId 
    ")->fetchAll(PDO::FETCH_ASSOC);

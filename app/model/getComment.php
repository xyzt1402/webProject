<?php
    $comments = $db->query("
        SELECT id, message, created, userId, pageId
        FROM comments
        WHERE pageId = '$id'
        ORDER by id DESC
    ")->fetchAll(PDO::FETCH_ASSOC);
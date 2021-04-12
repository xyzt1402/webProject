<?php
    $totalComment = $db->query("
        SELECT count(*) as total
        FROM comments
        WHERE pageId = '$id'
    ")->fetch(PDO::FETCH_ASSOC);
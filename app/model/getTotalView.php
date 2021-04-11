<?php
    $totalView = $db->query("
        SELECT Sum(view) as total, count(*) as totalPages
        FROM pages
        WHERE userId = '$id'
    ")->fetch(PDO::FETCH_ASSOC);
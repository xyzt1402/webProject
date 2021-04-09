<?php
    $searchPages = $db->query("
        SELECT id, title, label, url, topic, created
        FROM pages
        WHERE REPLACE(REPLACE(title,'đ','d'),'Đ','d') like '%$searchValue%' 
    ");
    if ($searchPages!==FALSE){
        $searchPages = $searchPages->fetchAll(PDO::FETCH_ASSOC);
    }
    

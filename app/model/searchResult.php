<?php
    if (!empty($_POST)) {
        $searchValue = $_POST['search'];
        $topic = "";
        if (!empty($_POST['topic'])){
            $topic = $_POST['topic'];
        }
        if ($topic=="Tất cả"){
            $topic = "";
        }
        $searchPages = $db->query("
            SELECT id, title, label, url, topic, created
            FROM pages
            WHERE REPLACE(REPLACE(title,'đ','d'),'Đ','d') like '%$searchValue%' AND topic like '%$topic%'
        ");
        if ($searchPages!==FALSE){
            $searchPages = $searchPages->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }

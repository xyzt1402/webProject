<?php
    if (!empty($_POST)) {
        $searchValue = $_POST['search'];
        $topic = "";
        $time = "";
        $sort = "Mới nhất";
        if (!empty($_POST['topic'])){
            $topic = $_POST['topic'];
        }
        if ($topic == "Tất cả"){
            $topic = "";
        }
        if (!empty($_POST['time'])){
            $time = $_POST['time'];
        }
        if (!empty($_POST['sort'])){
            $sort = $_POST['sort'];
        }
        function convertTime($so){
            // Current date and time
            $datetime = date("Y-m-d H:i:s");

            // Convert datetime to Unix timestamp
            $timestamp = strtotime($datetime);

            // Subtract time from datetime
            $time = $timestamp - ($so * 24 * 60 * 60);

            // Date and time after subtraction
            return date("Y-m-d H:i:s", $time);
        }
        
        if ($time == "1 ngày qua"){
            $time = convertTime(1);
        } else {
            if ($time == "1 tuần qua"){
                $time = convertTime(7);
            } else {
                if ($time == "1 tháng qua"){
                    $time = convertTime(30);
                } else {
                    if ($time == "Tất cả"){
                        $time = "";
                    }
                }
            }
        }

        if ($sort == "Phổ biến nhất"){
            $sort = 'ORDER by view desc';
        } else{ 
            $sort = ''; 
        }
        $searchPages = $db->query("
            SELECT id, title, label, url, topic, created, view
            FROM pages
            WHERE REPLACE(REPLACE(title,'đ','d'),'Đ','d') like '%$searchValue%' AND topic like '%$topic%' AND created > '$time'
            ". $sort ."
        ");
        
        if ($searchPages!==FALSE){
            $searchPages = $searchPages->fetchAll(PDO::FETCH_ASSOC);
        }        
    }

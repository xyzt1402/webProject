
<?php
    define('APP_ROOT',__DIR__);
    define('MODEL_ROOT',APP_ROOT . '/model');
    $db=new PDO('mysql:host=localhost:3306; dbname=webproject; charset=utf8','root','');

    if (!empty($_POST)) {
        $str = $_POST["action"];
        $qsearchPages = $db->query("
            SELECT id, title, label, url, topic, created
            FROM pages
            WHERE REPLACE(REPLACE(title,'đ','d'),'Đ','d') like '%$str%' 
            LIMIT 3
        ");
        if ($qsearchPages!==FALSE){
            $qsearchPages = $qsearchPages->fetchAll(PDO::FETCH_ASSOC);
            $myArr = array();
            $myObj = new stdClass();
            foreach ($qsearchPages as $page){
                $arr = array('title' => $page['title'], 'id' => $page['id'], 'created' => $page['created'],
                    'topic' => $page['topic'],'label' => $page['label']);
                array_push($myArr,$arr);
            }
            echo json_encode($myArr);
        }

    }else{
        echo 'abcd';
    }

<?php
    define('APP_ROOT',__DIR__);
    define('MODEL_ROOT',APP_ROOT . '/model');
    $db=new PDO('mysql:host=localhost:3306; dbname=webproject; charset=utf8','root','');

    if (!empty($_POST)) {
        $offset = $_POST["offset"];
        $morePages = $db->query("
            SELECT id, title, label, url, topic, created
            FROM pages
            LIMIT 3 OFFSET ". $offset 
        );
        var_dump($morePages);
        if ($morePages!==FALSE){
            $morePages = $morePages->fetchAll(PDO::FETCH_ASSOC);
            $myArr = array();
            $myObj = new stdClass();
            foreach ($morePages as $page){
                $arr = array('title' => $page['title'], 'id' => $page['id'], 'created' => $page['created'],
                    'topic' => $page['topic'],'label' => $page['label']);
                array_push($myArr,$arr);
            }            
            echo json_encode($myArr);
        }

    }else{
        echo 'abcd';
    }
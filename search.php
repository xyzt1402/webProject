<?php
    require 'app/start.php';
    if(!empty($_POST)){
        $searchValue = $_POST["search"];
        $topic = ""; $time=""; $sort = "";
        if (isset($_POST['topic'])){
            $topic = $_POST['topic'];
        }
        if (isset($_POST['time'])){
            $topic = $_POST['time'];
        }
        if (isset($_POST['sort'])){
            $topic = $_POST['sort'];
        }
        require MODEL_ROOT . "/searchResult.php";
        require VIEW_ROOT . "/searchView.php ";
    }else{
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
  
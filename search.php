<?php
    require 'app/start.php';
    if(!empty($_POST)){
        $searchValue = $_POST["search"];
        require MODEL_ROOT . "/searchResult.php";
        require VIEW_ROOT . "/searchView.php ";
    }else{
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
  
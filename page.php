<?php
    require 'app/start.php';

    if (!empty($_GET['id']))
    {
        //get id from indexView.php
        $id=$_GET['id'];
    
        
        //get data from database with that id
        require MODEL_ROOT . '/getComment.php';
        require MODEL_ROOT . '/getPage.php';
        require MODEL_ROOT . '/get4PopularPages.php';
        require MODEL_ROOT . '/getUser.php';
        $id = $page['id'];
        require MODEL_ROOT . '/getTotalComment.php';
        $id = $_GET['id'];
        require VIEW_ROOT . '/pageView.php';
    }

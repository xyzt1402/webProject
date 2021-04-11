<?php
    require 'app/start.php';
    $id = $_SESSION['id'];
    require MODEL_ROOT . '/getUserComment.php';

    if (empty($_SESSION['username'])){
        header('Location: index.php');
    }
    if ($userInfo['permission'] <2){
        echo "Bạn không có quyền đăng bài";
    } else{
    require VIEW_ROOT . '/createView.php';
    }
<?php
    require 'app/start.php';
    $id = $_SESSION['id'];
    require MODEL_ROOT . '/getUserComment.php';

    if (empty($_SESSION['username'])){
        header('Location: index.php');
    }
    if ($userInfo['permission'] <3){
        $error = "Bạn không có quyền sửa bài !";
        header('Location: ' . BASE_URL . '/error.php?error=' . $error);
    } else{
    $pageId = $_GET['id'];
    require MODEL_ROOT . '/getEditPage.php';
    require VIEW_ROOT . '/editView.php';    
    } 
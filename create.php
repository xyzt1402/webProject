<?php
    require 'app/start.php';
    $id = $_SESSION['id'];
    require MODEL_ROOT . '/getUserComment.php';

    if (empty($_SESSION['username'])){
        header('Location: index.php');
    }
    if ($userInfo['permission'] <2){
        $error = "Bạn không có quyền đăng bài !";
        header('Location: ' . BASE_URL . '/error.php?error=' . $error);
    } else{
    require VIEW_ROOT . '/createView.php';
    }
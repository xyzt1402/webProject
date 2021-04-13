<?php
    // This is controller

    require 'app/start.php';
    $id = $_SESSION['id'];
    require MODEL_ROOT .'/getUserComment.php';
    $id = $userInfo['id'];
    if ($userInfo['permission'] <2){
        $error = "Bạn không có quyền quản lý bài viết !";
        header('Location: ' . BASE_URL . '/error.php?error=' . $error);
    } else{    
        require MODEL_ROOT .'/getTotalView.php';
        require MODEL_ROOT . '/getUserPage.php';
        require VIEW_ROOT . '/userView.php';
    }

?>
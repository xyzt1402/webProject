<?php
// This is controller

require 'app/start.php';
$id = $_SESSION['id'];
require MODEL_ROOT .'/getUserComment.php';
$id = $userInfo['id'];
require MODEL_ROOT .'/getTotalView.php';
require MODEL_ROOT . '/getUserPage.php';
require VIEW_ROOT . '/userView.php';
?>
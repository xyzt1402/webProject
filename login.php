<?php
    require 'app/start.php';
    if (isset($_SESSION['username'])||isset($_SESSION['gId'])) {
        header('Location: index.php');
    }
    require VIEW_ROOT . '/loginView.php';
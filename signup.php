<?php
    require 'app/start.php';
    if (isset($_SESSION['username'])||isset($_SESSION['gEmail'])) {
        header('Location: index.php');
    }
    require VIEW_ROOT . '/signupView.php';
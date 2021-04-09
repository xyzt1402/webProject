<?php
    require 'app/start.php';

    if (empty($_SESSION['username'])){
        header('Location: index.php');
    }
    
    require VIEW_ROOT . '/createView.php';
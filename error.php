<?php
    require 'app/start.php';
    if (!empty($_GET['error']))
    {
        //get id from indexView.php
        $error=$_GET['error'];

        require VIEW_ROOT . '/errorView.php';
    }
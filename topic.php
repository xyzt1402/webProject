<?php
    require 'app/start.php';

    if (!empty($_GET['topic']))
    {
        $topic=$_GET['topic'];

        require MODEL_ROOT . '/getTopic.php';

        require VIEW_ROOT . '/topicView.php';
    }
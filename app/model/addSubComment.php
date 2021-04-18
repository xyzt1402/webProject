<?php 
    require '../start.php';
    if (!empty($_POST)) {
        $message = $_POST["message"];
        $userId = $_POST["userId"];
        $commentId = $_POST["commentId"];
        if ($message == "") {
            $error =  "message không được để trống!";
        } else {
            $cmtInfo = $db->prepare("
            INSERT INTO subcomments (message, userId, commentId)
            VALUES (:message, :userId, :commentId)
            ");
            $cmtInfo->execute([
                'message' => $message,
                'userId' => $userId,
                'commentId' => $commentId
            ]);
            header('Location: '. BASE_URL . "/page.php?id=" . $pageId);
        }
    }
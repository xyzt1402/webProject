<?php 
    require '../start.php';
    if (!empty($_POST)) {
        $message = $_POST["message"];
        $userId = $_POST["userId"];
        $pageId = $_POST["pageId"];
        if ($message == "") {
            echo "message không được để trống!";
        } else {
            $cmtInfo = $db->prepare("
            INSERT INTO comments (message, userId, pageId)
            VALUES (:message, :userId, :pageId)
            ");
            $cmtInfo->execute([
                'message' => $message,
                'userId' => $userId,
                'pageId' => $pageId
            ]);
            header('Location: '. BASE_URL . "/page.php?id=" . $pageId);
        }
    }
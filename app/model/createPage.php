<?php
require '../start.php';
if (!empty($_POST)) {
    $title = $_POST['title'];
    $url = $_POST['url'];
    $label = $_POST['label'];
    $body = $_POST['body'];
    $topic = $_POST['topic'];

    if ($_FILES["fileToUpload"]["name"]!=="") {
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOK = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error =  "Ảnh bìa không xác định";
            header('Location: ' . BASE_URL . '/error.php?error=' . $error);
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            $error = "File ảnh bìa đã tồn tại";
            header('Location: ' . BASE_URL . '/error.php?error=' . $error);
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Ảnh bìa chỉ chấp nhận các dạng: JPG, JPEG, PNG & GIF";
            header('Location: ' . BASE_URL . '/error.php?error=' . $error);
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            if ($error==""){
                $error = "Không thể upload file";
            }
            header('Location: ' . BASE_URL . '/error.php?error=' . $error);
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                $error = "Lỗi trong quá trình upload ảnh bìa";
                header('Location: ' . BASE_URL . '/error.php?error=' . $error);
            }
        }
    }

    if ($url=="") {
        $url = BASE_URL . "/app/upload/" . basename($_FILES["fileToUpload"]["name"]);
        var_dump($url);
    }
    $userId = $_SESSION['id'];

    $insertPage = $db->prepare("
            INSERT INTO pages (label, url, title, body, userId, topic)
            VALUES (:label, :url, :title, :body, :userId, :topic)
        ");

    $insertPage->execute([
        'label' => $label,
        'url' => $url,
        'title' => $title,
        'body' => $body,
        'userId' => $userId,
        'topic' => $topic
    ]);
    header('Location: ' . BASE_URL);
}

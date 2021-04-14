<?php
require '../start.php';
if (!empty($_POST)) {
    $title = $_POST['title'];
    $url = $_POST['url'];
    $label = $_POST['label'];
    $body = $_POST['body'];
    $topic = $_POST['topic'];
    $id = $_POST['id'];

    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOK = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    if (!isset($_POST['url'])){
      $url = BASE_URL . "/app/upload/" . basename($_FILES["fileToUpload"]["name"]);
    }
    $userId = $_SESSION['id'];

    $insertPage = $db->prepare("
            UPDATE INTO pages ( label, url, title, body, userId, topic)
            SET
                label = :label,
                url = :url,
                title = :title,
                body  = :body,
                userId = :userId,
                topic = :topic,
            WHERE id = :id
        ");

    $insertPage->execute([
        'id' =>$id,
        'label' => $label,
        'url' => $url,
        'title' => $title,
        'body' => $body,
        'userId' => $userId,
        'topic' => $topic
    ]);
    header('Location: ' . BASE_URL);
}

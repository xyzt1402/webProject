<?php
require '../start.php';
if (!empty($_POST)) {
    $title = $_POST['title'];
    $url = $_POST['url'];
    $label = $_POST['label'];
    $body = $_POST['body'];
    $topic = $_POST['topic'];

    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOK = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $error =  "File is not an image.";
        header('Location: ' . BASE_URL . '/error.php?error=' . $error);
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        $error = "Sorry, file already exists.";
        header('Location: ' . BASE_URL . '/error.php?error=' . $error);
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        header('Location: ' . BASE_URL . '/error.php?error=' . $error);
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        $error = "Sorry, your file was not uploaded.";
        header('Location: ' . BASE_URL . '/error.php?error=' . $error);
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          $error = "Sorry, there was an error uploading your file.";
          header('Location: ' . BASE_URL . '/error.php?error=' . $error);
        }
      }
    if (!isset($_POST['url'])){
      $url = BASE_URL . "/app/upload/" . basename($_FILES["fileToUpload"]["name"]);
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

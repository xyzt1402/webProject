<?php 
    require '../start.php';
    $_SESSION["gId"] = $_POST["gId"]; 
    $_SESSION["username"] = $_POST["gName"];

    $gId = $_SESSION["gId"];
    $username = $_SESSION["username"];

    $loginInfo = $db->query("
    SELECT *
    FROM user
    WHERE gId = '$gId'
    LIMIT 1
    ")->fetchAll(PDO::FETCH_ASSOC);
    $num_rows = count($loginInfo);
    if ($num_rows == 0) {
        $insertUser=$db->prepare("
        INSERT INTO user (username, gId)
        VALUES (:username, :gId)
        ");
        $insertUser->execute([
            'username' => $username,
            'gId' => $gId,
        ]);
        $_SESSION['id'] = $db->lastInsertId();
    }else{
        $_SESSION['id'] = $loginInfo[0]['id'];
    }
<?php
    require '../start.php';
    if (!empty($_POST)) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        if ($name == "" || $password == "") {
            echo "username hoặc password bạn không được để trống!";
        } else {
            $loginInfo = $db->query("
                SELECT *
                FROM user
                WHERE username = '$name'
                LIMIT 1
            ")->fetchAll(PDO::FETCH_ASSOC);
            $num_rows = count($loginInfo);
            if ($num_rows == 1) {
                echo "Tên tài khoản đã tồn tại";
            } else {
                $insertUser = $db->prepare("
                INSERT INTO user (username, password)
                VALUES (:username, :password)
                ");
                $insertUser->execute([
                    'username' => $name,
                    'password' => password_hash($password,PASSWORD_BCRYPT,['cost'=>12])
                ]);
                header('Location: '. BASE_URL);
            }
        }
    }

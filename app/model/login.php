<?php
    require '../start.php';
    if (!empty($_POST)) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "" || $password == "") {
            echo "username hoặc password bạn không được để trống!";
        } else {
            $loginInfo = $db->query("
                SELECT *
                FROM user
                WHERE username = '$username' and password = '$password'
                LIMIT 1
            ")->fetchAll(PDO::FETCH_ASSOC);
            $num_rows = count($loginInfo);
            if ($num_rows == 0) {
                echo "tên đăng nhập hoặc mật khẩu không đúng !";
            } else {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $loginInfo[0]['id'];
                header('Location: '. BASE_URL);
            }
        }
    }

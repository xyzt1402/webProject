<?php
    require '../start.php';
    if (!empty($_POST)) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "" || $password == "") {
            echo "username hoặc password bạn không được để trống!";
        } else {

            $loginInfo = $db->query("
                SELECT password, id, permission 
                FROM user
                WHERE username = '$username'
                LIMIT 1
            ")->fetch(PDO::FETCH_ASSOC);

            if ($loginInfo==false or password_verify($password, $loginInfo['password'])==false){
                $error = "Tên đăng nhập hoặc Mật khẩu không đúng !";
                header('Location: ' . BASE_URL . '/error.php?error=' . $error);
            }else{
                if ( $loginInfo['permission'] ==0)
                {
                    $error =  "Bạn không có quyền đăng nhập";
                    header('Location: ' . BASE_URL . '/error.php?error=' . $error);
                } else {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $loginInfo['id'];
                header('Location: '. BASE_URL);
                }
            }
        }
    }

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>assets/css/styles.css">
</head>
<body>
    <div class="wrapper">
        <h1>Admin Panel</h1>
        <ul>
            <li>
                <a href="<?php echo BASE_URL . '/PageList.php' ?>">Page List</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL . '/UserList.php' ?>">User List</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL . '/CommentList.php' ?>">Comment List</a>
            </li>
        </ul>
    </div>
</body>
</html>
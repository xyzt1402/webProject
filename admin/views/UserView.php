<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_VIEW; ?>assets/css/styles.css">
    <link rel="stylesheet" href="https://egkoppel.github.io/product-sans/google-fonts.css">
</head>

<body>
    <div class='wrapper'>
        <h1> User List </h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Type</th>
                    <th>Permission</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php foreach ($Users as $row) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td style="font-size: 10px"><?php echo $row['password']; ?></td>
                    <td style="padding-top: 10px !important; padding-bottom: 5px !important; "><?php
                        if ($row['gId'] == "") {
                            echo "Local";
                        } else {
                            echo "<img style='width: 45px; height: auto' src='https://www.google.com.vn/images/branding/googlelogo/2x/googlelogo_color_160x56dp.png'></img>";
                        }
                        ?></td>
                    <td>
                        <select id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="vw">VW</option>
                            <option value="audi" selected>Audi</option>
                        </select>
                    </td>
                    <td>
                        <a href="<?php echo BASE_URL; ?>/model/deleteUser.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>
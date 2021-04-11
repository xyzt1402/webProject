<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_VIEW; ?>assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="alert" style="display: none;">
        <span class="closebtn" id="popup"  onclick="closePopup(this)">&times;</span>
        <div>This is an alert box.</div>
    </div>
    <div class='wrapper'>
        <h1> User List </h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Type</th>
                    <th>Password</th>
                    <th>Permission</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php foreach ($Users as $row) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td style="padding-top: 10px !important; padding-bottom: 5px !important; "><?php
                        if ($row['gId'] == "") {
                            echo "Local";
                        } else {
                            echo "<img style='width: 45px; height: auto' src='https://www.google.com.vn/images/branding/googlelogo/2x/googlelogo_color_160x56dp.png'></img>";
                        }
                        ?></td>
                    <td style="font-size: 10px"><?php echo $row['password']; ?></td>
                    <td>
                        <select name="permission" onchange="changePermission(this)" userId="<?php echo $row['id'];?>">
                            <?php for ($i = 0; $i<6;$i++):?>
                                <option <?php
                                    if ($i == $row['permission']){
                                        echo "selected";
                                    }
                                ?> value="<?php echo $i;?>" ><?php echo $i;?></option>
                            <?php endfor;?>
                        </select>
                    </td>
                    <td>
                        <button onclick="deleteUser(<?php echo $row['id']; ?>, this)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

<script>
    function closePopup(popup){
        popup.parentElement.style.display='none';
    }
    function changePermission(perOptions){
        $.ajax({
            url: "http://localhost/myweb/webProject/admin/model/changePermission.php",
            type: "post",
            data: {
                id: perOptions.getAttribute('userid'),
                permission: perOptions.value,
            } ,
            success: function (response) {
                var popup = document.getElementById('popup');
                popup.parentElement.children[1].textContent = 'Sửa permission hoàn tất'
                popup.parentElement.style.display = '';
            }
        });
    }
    function deleteUser(userId, node){
        $.ajax({
            url: "http://localhost/myweb/webProject/admin/model/deleteUser.php",
            type: "post",
            data: {
                id: userId
            } ,
            success: function (response) {
                node.parentNode.parentNode.remove()
                var popup = document.getElementById('popup');
                popup.parentElement.children[1].textContent = 'Xóa User hoàn tất'
                popup.parentElement.style.display = '';
            }
        });
    }
</script>
</html>
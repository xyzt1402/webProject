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
        <h1> Page List </h1>
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Topic</th>
                <th>Title</th>
                <th>Created</th>
                <th>View</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
            <?php foreach($pages as $row):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td>
                        <a href="http://localhost/myweb/webProject/topic.php?topic=<?php echo $row['topic'];?>" target="_blank">
                            <?php echo $row['topic'];?>
                        </a>
                    </td>
                    <td>
                        <a href="http://localhost/myweb/webProject/page.php?id=<?php echo $row['id'];?>" target="_blank">
                            <?php echo $row['title'];?>
                        </a>
                    </td>
                    <td><?php echo $row['created'];?></td>
                    <td><?php echo $row['view'];?></td>
                    <td>
                        <button onclick="deletePage(<?php echo $row['id']; ?>, this)">Delete</button>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</body>
<script>
    function deletePage(userId, node){
        $.ajax({
            url: "http://localhost/myweb/webProject/admin/model/deletePage.php",
            type: "post",
            data: {
                id: userId
            } ,
            success: function (response) {
                node.parentNode.parentNode.remove()
                var popup = document.getElementById('popup');
                popup.parentElement.children[1].textContent = 'Xóa Page hoàn tất'
                popup.parentElement.style.display = '';
            }
        });
    }
</script>
</html>
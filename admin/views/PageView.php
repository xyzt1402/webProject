<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_VIEW; ?>assets/css/styles.css">
</head>

<body>
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
                    <td><?php echo $row['topic'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['created'];?></td>
                    <td><?php echo $row['view'];?></td>
                    <td>
                        <a href="<?php echo BASE_URL;?>/model/deletePage.php?id=<?php echo $row['id'];?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>

        </table>
    </div>
</body>

</html>
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
                <th>Id</th>
                <th>Topic</th>
                <th>Title</th>
                <th>Created</th>
                <th>View</th>
                <th></th>
            </tr>
        </thead>
            <?php
            foreach ($pages as $row) {
                echo 
                "<tr>
                <td>{$row['id']}</td>
                <td>{$row['topic']}</td>
                <td>{$row['title']}</td>
                <td>{$row['created']}</td>
                <td>{$row['view']}</td>
                <td> Delete </td>
            </tr>"; //$row['index'] the index here is a field name
            }
            ?>

        </table>
    </div>
</body>

</html>
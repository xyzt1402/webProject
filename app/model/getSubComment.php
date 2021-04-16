<?php
    $subComments = $db->query("
        SELECT *
        FROM subComments
        WHERE commentId = '$cmtId'
        ORDER by id DESC
    ")->fetchAll(PDO::FETCH_ASSOC);
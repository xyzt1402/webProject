<?php
    $subComments = $db->query("
        SELECT *
        FROM subComments
        WHERE commentId = '$cmtId'
    ")->fetchAll(PDO::FETCH_ASSOC);
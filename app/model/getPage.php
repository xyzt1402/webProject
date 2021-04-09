<?php
    $page = $db->prepare("
            SELECT *
            FROM pages
            WHERE id= :id
            LIMIT 1
        ");

    $page->execute(['id' => $id]);

    $page = $page->fetch(PDO::FETCH_ASSOC);

    $view = $page['view'] + 1;

    $updatePage=$db->prepare("
            UPDATE pages
            SET
                view = :view
            WHERE id = :id
        ");
    $updatePage->execute([
            'id'=> $id, 
            'view'=>$view
        ]);

<?php
     
    require 'database.php';

    $id = $_POST['id'];
    $post_id = $_POST['post_id'];
    $sqlDeleteComment= "DELETE FROM comments WHERE id = ? ;";
    $statementDeleteComment = $databaseConnection->prepare($sqlDeleteComment);
    $statementDeleteComment->execute([$id]);
    $statementDeleteComment ->setFetchMode(PDO::FETCH_ASSOC);

?>
<?php
    require 'database.php';

    $post_id = $_POST['post_id'];
    $author = $_POST['author'];
    $text = $_POST['comment'];

    $sqlInsert = "INSERT INTO comments (author, text, post_id) VALUES ('{$author}', '{$text}', {$post_id});";
        
    $statementInsert = $databaseConnection->prepare($sqlInsert);
    $statementInsert->execute();
    $statementInsert->setFetchMode(PDO::FETCH_ASSOC);
    
?>
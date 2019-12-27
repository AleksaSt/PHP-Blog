<?php
    require 'database.php';

    $author = $_POST['author'];
    $title = $_POST['title'];
    $body = $_POST['body'];
        
    $date = date('Y-m-d H:i:s');
         $sqlCreate = "INSERT INTO posts (title, body, author, created_at) VALUES ('{$title}', '{$body}', '{$author}', '{$date}');";
         $statementCreate = $databaseConnection->prepare($sqlCreate);
         $statementCreate->execute();
         $statementCreate->setFetchMode(PDO::FETCH_ASSOC);

?> 
<?php

    require 'database.php';
    require 'classes/post.php';    

    $sql = "SELECT posts.id, posts.title, posts.created_at, posts.author, posts.body
    FROM posts ORDER BY created_at DESC";

    $statement = $databaseConnection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();
    
    foreach($posts as $post){
        $object = new Post($post['author'], $post['title'], $post['body'], $post['id'], $post['created_at']);

        $object->print();
    }
?>
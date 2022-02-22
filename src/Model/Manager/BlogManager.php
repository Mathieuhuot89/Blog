<?php

namespace Blog\Model\Manager;
use Blog\Core\PDOConnection;
use Blog\Model\Entity\Post;

class BlogManager
{
     public function getList()
     {
        $pdo = PDOConnection::connect();
        $query = $pdo->query("SELECT * FROM post ORDER BY date_creation DESC");
        $posts = $query->fetchAll();
        return $posts;
     }

     public function add(Post $post)
     {
        $pdo = PDOConnection::connect();
        $query = $pdo->prepare('INSERT INTO post (title, chapo, comment, date_creation) VALUES (:title, :chapo, :comment, :date_creation)' );
        $query->execute([
           
           ':title' => $post->title, 
           ':chapo' => $post->chapo,
           ':comment' => $post->comment,
           ':date_creation' => $post->dateCreation->format('y-m-d')
        ]);
     }
    

    
}
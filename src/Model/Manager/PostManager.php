<?php

namespace Blog\Model\Manager;

use Blog\Core\PDOConnection;
use Blog\Model\Entity\Post;

class PostManager extends PDOConnection
{
   public function getList()
   {

      $query = $this->db->query("SELECT * FROM post ORDER BY date_creation DESC");
      $posts = $query->fetchAll(\PDO::FETCH_ASSOC);
      return $posts;
   }

   public function getPost($id)
   {
      $query = $this->db->prepare("SELECT * FROM post where idpost = :idpost");
      $query->execute([
         ':idpost'=> $id
         ]
      );
      $post = $query->fetch(\PDO::FETCH_ASSOC);
      $query = $this->db->prepare("SELECT * FROM comment where post_id = :idpost");
      $query->execute([
         ':idpost'=> $id
         ]
      );
      $comments = $query->fetchAll(\PDO::FETCH_ASSOC);
      return [$post, $comments];
   }

   /**
    * Add post
    */
   public function add(Post $postObjet)
   {

      $query = $this->db->prepare('INSERT INTO post (title, chapo, content, date_creation, user_id) VALUES (:title, :chapo, :content, :date_creation, :user_id)');
      $query->execute([

         ':user_id'=> $postObjet->getUser()->getIduser(),
         ':title' => $postObjet->getTitle(),
         ':chapo' => $postObjet->getChapo(),
         ':content' => $postObjet->getContent(),
         ':date_creation' => date('Y-m-d H:i:s'),
      ]);
   }

   public function delete(Post $postObjet)
   {
      $query = $this->db->prepare('delete from post where idpost = :id');
      $query->execute([
         ':id' => $postObjet->getIdpost(),
      ]);
   }
   public function edit(Post $postObjet)
   {
      $query = $this->db->prepare('UPDATE post SET title= :title, chapo= :chapo, content= :content WHERE idpost = :id ');
      $params = [
         ':id' => $postObjet->getIdpost(),
         ':title' => $postObjet->getTitle(),
         ':chapo' => $postObjet->getChapo(),
         ':content' => $postObjet->getContent()

      ];
      $query->execute($params);
   }

   public function getPostEntity($idpost)
   {
      $query = $this->db->prepare("SELECT * FROM post WHERE idpost = :idpost");
      $query->execute([
          ':idpost' => $idpost,
      ]);
      $post = $query->fetch(\PDO::FETCH_ASSOC);

      return new Post($post);
   }
}

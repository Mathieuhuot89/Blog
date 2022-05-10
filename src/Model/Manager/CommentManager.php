<?php

namespace Blog\Model\Manager;

use Blog\Core\Manager;
use Blog\Core\PDOConnection;
use Blog\Model\Entity\Comment;


class CommentManager extends Manager
{
    public function getList()
   {

      $query = $this->db->query("SELECT * FROM comment ");
      $comments = $query->fetchAll(\PDO::FETCH_ASSOC);
      return $comments;
   }

   public function getCommentToValidate()
   {
      $query = $this->db->query("SELECT * FROM comment where disabled = true ");
      $comments = $query->fetchAll(\PDO::FETCH_ASSOC);
      return $comments;
   }

   public function add(Comment $comment)
   {

    $query = $this->db->prepare('INSERT INTO comment (content, date_creation, disabled, user_id, post_id) VALUES (:content, :date_creation, :disabled, :user_id, :post_id)');
    $query->execute([
       ':content' => $comment->getContent(),
       ':date_creation' => date('Y-m-d H:i:s'),
       ':disabled' => $comment->getDisabled(),
       ':user_id' => $comment->getUser()->getIduser(),
       ':post_id' => $comment->getPost()->getIdpost(),
    ]);
   }

   public function delete(Comment $comment)
   {
        $query = $this->db->prepare('delete from comment where idcomment = :id');
        $query->execute([
        ':id' => $comment->getIdcomment(),
    ]);
   }

   public function getComment($id)
   {
        $query = $this->db->prepare('select * from comment where idcomment = :id');
        $query->execute([
        ':id' => $id,

    ]);
         $comment = $query->fetch(\PDO::FETCH_ASSOC);
         return $comment;
   }

   public function edit(Comment $comment)
   {
      $query = $this->db->prepare('update comment set content= :content, date_creation= :date_creation where idcomment = :id ');
      $params = [
         ':id' => $comment->getIdcomment(),
         ':content' => $comment->getContent(),
         ':date_creation' => $comment->getDateCreation(),


      ];
      $query->execute($params);
   }


   /**
    * Validation d'un commentaire
    *
    * @param  comment $comment
    * @return void
    */
   public function validate(Comment $comment)
   {
      $query = $this->db->prepare('update comment set disabled = :disabled where idcomment = :id ');
      $params = [
         ':id' => $comment->getIdcomment(),
         ':disabled' => $comment->getDisabled(),

      ];
      $query->execute($params);
   }

   public function getCommentEntity($idcomment)
   {
      $query = $this->db->prepare("SELECT * FROM comment WHERE idcomment = :idcomment");
      $query->execute([
          ':idcomment' => $idcomment,
      ]);
      $comment = $query->fetch(\PDO::FETCH_ASSOC);

      return new Comment($comment);
   }
}
<?php

namespace  Blog\Controller;

use Blog\Core\Controller;
use Blog\Model\Entity\Comment;


class CommentController extends Controller
{

    public function index()
    {
        $manager = $this->managers->getManager("Comment");
        $comments = $manager->getList();
        var_dump($comments);
    }

    public function add($post_id)
    {

        $userManager = $this->managers->getManager("User");
        $user = $userManager->getUser(4);

        $postManager = $this->managers->getManager("Post");
        $post = $postManager->getPostEntity($post_id);

        $commentManager = $this->managers->getManager("Comment");
        if (isset($_POST['content']) ) {
            $commentObjet = new Comment($_POST);
            $commentObjet->setUser($user);
            $commentObjet->setPost($post);
            $commentObjet->setDisabled(1);
            $commentManager->add($commentObjet);
        }
    }

    public function delete()
    {
        $manager = $this->managers->getManager("Comment");
        $commentArray = $manager->getComment();
        $comments = new Comment($commentArray[0]);
        $manager->delete($comments);

    }

    public function validate($idcomment)
    {
        $commentManager = $this->managers->getManager("Comment");
        $comment = $commentManager->getCommentEntity($idcomment);
        $comment->setDisabled(0);
        $commentManager->validate($comment);
    }
}

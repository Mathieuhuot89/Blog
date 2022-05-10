<?php
require_once "../vendor/autoload.php";

use Blog\Model\Entity\Post;
use Blog\Model\Entity\User;
use Blog\Model\Manager\CommentManager;
use Blog\Model\Manager\PostManager;
use Blog\Model\Entity\Comment;
use Blog\Controller\PostController;
use Blog\Controller\CommentController;

    //echo '<prE>';print_r($_GET);echo '</pre>';
    $options = explode('/',$_GET['url'] ?? $_GET['action'] ?? '');
    // par défault si aucun paramètre n'est pas passé
    // On appelle PostController avec la méthode index
    if (empty($options[0])) {
        $options[0]= 'Post';
        $options[1]= 'index';
    }

    $class  = 'Blog\\Controller\\'.ucfirst($options[0].'Controller');
    $method = $options[1] ?? 'index';
    $params = $options[2] ?? '';

    $x = new $class;
    $x->$method($params);


?>
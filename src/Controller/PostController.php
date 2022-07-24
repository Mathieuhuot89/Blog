<?php

namespace  Blog\Controller;

use Blog\Core\Controller;
use Blog\Model\Entity\Post;
use DateTime;

class PostController extends Controller
{
    /**
     * List all posts
     */
    public function index()
    {
        $manager = $this->managers->getManager("Post");
        $posts = $manager->getList();
        $this->view->show('blog/Accueil.twig.php', ['posts' => $posts, 'email' => $_SESSION['email'] ?? null]);
    }

    public function list()
    {
        $manager = $this->managers->getManager("Post");
        $posts = $manager->getList();
        $this->view->show('blog/Articles.twig.php', ['posts' => $posts, 'email' => $_SESSION['email'] ?? null]);
    }

    /**
     * View 1 post
     */
    public function show($id)
    {
        $manager = $this->managers->getManager("Post");
        list($post, $comments) = $manager->getPost($id);
        $userManager = $this->managers->getManager('User');
        $author = $userManager->getUser($post['user_id']);
      
        

        $this->view->show('blog/detail.twig.php', ['post' => $post,'comments' =>$comments, 'author'=> $author]);
    }

    /**
     * Delete 1 post
     */
    public function delete($id)
    {   
        
        $manager = $this->managers->getManager("Post");
        $postArray = $manager->getPost($id);
        $post = new Post($postArray[0]);
       
        $manager->delete($post);
        
        
    }

    /**
     * Add post
     */
    public function add()
    {
        $userManager = $this->managers->getManager("User");
        $user = $userManager->getUser(4);

        $blogManager = $this->managers->getManager("Post");

        if (isset($_POST['title']) && isset($_POST['chapo'])) {
            $postObjet = new Post($_POST);
            $postObjet->setUser($user);
            $blogManager->add($postObjet);
        }
        $this->view->show('blog/add.twig.php', []);
    }

    /**
     * Edit user
     */
    public function edit($id)
    {
        $userManager = $this->managers->getManager("User");
        $user = $userManager->getUser(4);

        $manager = $this->managers->getManager("Post");

        if(isset($_POST['edit'])){
            $postObjet = new Post($_POST);
            $postObjet->setUser($user);
            $manager->edit($postObjet);
            $id = $postObjet->getIdPost();
        }
        $post = $manager->getPost($id);
        
        $this->view->show('blog/edit.twig.php', ['post' => $post[0]]);
    }

    public function home()
    {
        require_once dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR . 'blog' .  DIRECTORY_SEPARATOR . 'Accueil.php';
    }
}

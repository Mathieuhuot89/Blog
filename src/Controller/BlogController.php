<?php

namespace  Blog\Controller;
use Blog\Core\Controller;
use Blog\Model\Entity\Post;
use DateTime;

class BlogController extends Controller
{
    public function index()
    {
        /*
        $mysqli = new \mysqli('localhost', 'root', 'Cambodge93250', 'blog');

        $result = $mysqli->query("SELECT * FROM user");

        while ($row = $result->fetch_row()) {
            print_r($row);
            exit;
        } */
        $manager = $this->managers->getManager("Blog");
        $posts = $manager->getList();
       // var_dump($posts);
    }


    public function add()
    {   
         
        $blogManager = $this->managers->getManager("Blog");

        if(isset($_POST['title']) && isset($_POST['chapo'])){
           /* $postObjet = new Post($_POST['title'], $_POST['chapo'], $_POST['comment'], new DateTime('2022-02-16')); */
           $postObjet = new Post();
           $postObjet->setTitle($_POST['title']);
           $postObjet->setChapo($_POST['chapo']);
           $postObjet->setComment($_POST['comment']);
           $postObjet->setDateCreation(new DateTime('2022-02-16'));
        
            $blogManager->add($postObjet); 
            
        }
        require_once dirname(dirname(dirname(__FILE__))). DIRECTORY_SEPARATOR. 'View'. DIRECTORY_SEPARATOR. 'blog'.  DIRECTORY_SEPARATOR. 'AddView.php';
    }

    public function edit()
    {
       
        
    }

    public function delete()
    {
    }

    public function home()
    {
        require_once dirname(dirname(dirname(__FILE__))). DIRECTORY_SEPARATOR. 'View'. DIRECTORY_SEPARATOR. 'blog'.  DIRECTORY_SEPARATOR. 'Accueil.php';
    }
}

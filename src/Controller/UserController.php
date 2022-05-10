<?php

namespace  Blog\Controller;

use Blog\Core\Controller;
use Blog\Model\Entity\User;

class UserController extends Controller
{
    public function login()
    {
        $error = "";
        if(isset($_POST['submit'])){
            $manager = $this->managers->getManager("User");
            if(!$manager->checkUser($_POST['login'], $_POST['password'])){
                $error = "Login ou mot de passe incorrect !";
            }

        }
        $this->view->show('user/login.twig.php', ['error' => $error]);
    }

    public function logout()
    {

    }

    public function register()
    {

    }

    public function changePassword()
    {
        
    }

    public function pwd()
    {
        echo "<h1>";
        echo password_hash($_GET['password'], PASSWORD_BCRYPT);
         echo '</h1>';
        exit;
    }
}

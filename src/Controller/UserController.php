<?php

namespace  Blog\Controller;

use Blog\Core\Controller;
use Blog\Model\Entity\User;

class UserController extends Controller
{
    // se connecter
    public function login()
    {
        $error = "";

        // soumission formulaire
        if(isset($_POST['submit'])){

            // recuperation du manager
            $manager = $this->managers->getManager("User");

            // vérifie que l'utilisateur existe dans la base de donnees
            if(!$manager->checkUser($_POST['email'], $_POST['password'])){
                // cas ou il n'existe pas
                $error = "Login ou mot de passe incorrect !";
            } else {
                // cas ou l'utilisateur existe, je le stocke dans une session pour le récupérer à un autre endroit
                $_SESSION["email"] = $_POST['email'];

                //redirection vers la page d'accueil
                header("Location: http://blog/index.php");
            }

        }

        // appel du template
        $this->view->show('user/login.twig.php', ['error' => $error]);
    }

    public function add()
    {
        $user = null;

        // soumission formulaire
        if(isset($_POST['submit'])){

            // création de l'objet user
            $user = new User([]);

            // enrichissement des parametre récupéré depuis le formulaire
            $user->setUsername($_POST['username']);
            $user->setPassword($_POST['password']);
            $user->setEmail($_POST['email']);

            // recuperation du manager
            $manager = $this->managers->getManager("User");

            // ajout de l'utilisateur dans la base de données
            $manager->add($user);
        }

         // appel du template
        $this->view->show('user/add.twig.php', ['user' => $user ?: null]);
    }

    // déconnection de l'utilisateur
    public function logout()
    {
        // suppression de la session de l'utilisateur
        unset($_SESSION["email"]);

        // redirection vers la page d'accueil
        header("Location: http://blog/index.php");
    }


    public function pwd()
    {
        echo "<h1>";
        echo password_hash($_GET['password'], PASSWORD_BCRYPT);
         echo '</h1>';
        exit;
    }

    public function addContact()
    {
         // appel du template
         $this->view->show('user/contact.twig.php', []);
    }
}

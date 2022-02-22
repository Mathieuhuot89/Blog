<?php 
    
    require_once "../vendor/autoload.php";
    use Blog\Controller\BlogController;
    $blog = new BlogController();
    $action = $_GET['action'] ?? null;
    switch ($action){
        case 'add':
            $blog->add();
            break;
        default:
            $blog->home();
    }
    

    
?>
<?php

namespace App;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {   
        // On récupere dans $class la totalité du namespace de la classe concerné
        // On, retire App\ (client\Compte)
        $class = str_replace(__NAMESPACE__. '\\', '', $class);

        // On remplace les \ par /
        $class = str_replace('\\', '/', $class);

        $fichier = __DIR__ . '/' . $class . '.php';
        // On vérifie si le fichier existe
        if(file_exists($fichier)){
            require_once $fichier;
        }
        
    }
}
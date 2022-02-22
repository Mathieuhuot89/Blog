<?php

namespace Blog\Core;
use \PDO;

class PDOConnection
{
    public static function connect()
    {   
        $db = new PDO("mysql:host=localhost;dbname=blog","root","Cambodge93250");
      
        return $db;
    }
}
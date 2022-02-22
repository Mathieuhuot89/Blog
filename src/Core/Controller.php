<?php

namespace Blog\Core;

class Controller 
 {  
     protected $managers;
     public function __construct()
     {
        $this->managers = new Managers("PDO",PDOConnection::connect());
        
     }
 }
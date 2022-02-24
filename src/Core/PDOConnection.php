<?php

namespace Blog\Core;
use \PDO;

class PDOConnection
{   
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=blog","root","Cambodge93250");
    }
}
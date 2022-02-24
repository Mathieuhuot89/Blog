<?php

namespace Blog\Model\Manager;
use Blog\Core\PDOConnection;

class UserManager
{
    public function getUser($userid){
        $pdo = PDOConnection::connect();
        $query = $pdo->query("SELECT * FROM user");
        $users = $query->fetchAll();
        return $users;

    }
}
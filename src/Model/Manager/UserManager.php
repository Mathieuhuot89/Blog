<?php

namespace Blog\Model\Manager;
use Blog\Core\PDOConnection;
use Blog\Model\Entity\User;

class UserManager extends PDOConnection
{
    public function getUser($userid){
        $query = $this->db->query("SELECT * FROM user");
        $users = $query->fetchAll();
        return $users;

    }

    public function add(User $user){
        $query = $this->db->prepare('insert into user (username, password, email) values (:usernname, :password, :email)');
        $query->execute([
           
            ':username' => $user->getUsername(), 
            ':password' => password_hash($user->getPassword(),PASSWORD_BCRYPT),
            ':email' => $user->getEmail(),
        ]);
            
    }

    public function edit(User $user){
        $password = '';
        if ($user->getPassword()){
            $password = ', password= :password';
        }

        
        $query = $this->db->prepare('update user set username= :username, email= :email'.$password.' where iduser = :id ');
        $params = [
            ':id' => $user->getIduser(),
            ':username' => $user->getUsername(), 
            ':email' => $user->getEmail(),
        ];
        if ($password){
            $params[':password'] = password_hash($user->getPassword(),PASSWORD_BCRYPT);
        }
        $query->execute($params);
    }

    public function delete(User $user){
        $query = $this->db->prepare('delete user where iduser = :id ');
        $query->execute([
            ':id' => $user->getIduser(),
        ]);
    }

    public function checkEmail($email){
        $query = $this->db->prepare('select iduser from user where email = :email ');
        $query->execute([
            ':email' => $email,
            
        ]);
        return $query->fetch();
    }
}
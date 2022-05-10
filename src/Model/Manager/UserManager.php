<?php
namespace Blog\Model\Manager;

use Blog\Core\PDOConnection;
use Blog\Model\Entity\User;

class UserManager extends PDOConnection
{
    public function getUser($userid){
        $query = $this->db->prepare("SELECT * FROM user WHERE iduser = :iduser");
        $query->execute([
            ':iduser' => $userid,
        ]);
        $user = $query->fetch(\PDO::FETCH_ASSOC);

        return new User($user);
    }
    /**
     * add user
     */
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
        $query = $this->db->prepare('delete from user where iduser = :id ');
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

    public function checkUser($login, $password)
    {
        $query = $this->db->prepare('select iduser, email, password from user where email = :email ');
        $query->execute([
            ':email' => $login,

        ]);
        $user = $query->fetch(\PDO::FETCH_ASSOC);
        if (!$user) {
            return false;
        }
        $check = password_verify($password, $user['password']);
        if (password_needs_rehash($user['password'], PASSWORD_BCRYPT)) {
            $password = password_hash($user['password'], PASSWORD_BCRYPT);
            $req = $this->db->prepare('UPDATE user SET password=? WHERE iduser=?');
            $req->execute(array($password, $user['iduser']));
        }
        if($check){
            return true;
        }
        return false;
    }
}
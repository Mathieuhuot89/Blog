<?php

namespace Blog\Model\Entity;

class User
{
    protected $iduser;
    protected $username;
    protected $password;
    protected $email;
    
    public function getIduser(){
        return $this->iduser;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setIduser($iduser){
         $this->iduser = $iduser;
    }
    public function setUsername($username){
         $this->username = $username;
    }
    public function setPassword($password){
         $this->password = $password;
    }
    public function setEmail($email){
         $this->email = $email;
    }
}

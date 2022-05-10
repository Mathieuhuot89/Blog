<?php

namespace Blog\Model\Entity;
use Blog\Core\Model;

class Comment extends Model
{

    protected $idcomment;
    protected $content;
    protected $dateCreation;
    protected $disabled;
    protected $user;
    protected $post;

    public function getIdcomment(){
        return $this->idcomment;
    }
    public function getContent(){
        return $this->content;
    }
    public function getDisabled(){
        return $this->disabled;
    }
    public function getDateCreation(){
        return $this->dateCreation;
    }
    public function getUser(){
        return $this->user;
    }
    public function getPost(){
        return $this->post;
    }

    public function setIdcomment($idcomment){
         $this->idcomment = $idcomment;
    }
    public function setContent($content){
         $this->content = $content;
    }
    public function setDisabled($disabled){
         $this->disabled = $disabled;
    }
    public function setDateCreation($dateCreation){
        $this->dateCreation = $dateCreation;
    }
    public function setUser(User $user){
        $this->user= $user;
    }
    public function setPost(Post $post){
        $this->post= $post;
    }
}

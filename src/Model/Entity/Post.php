<?php

namespace Blog\Model\Entity;
use Blog\Core\Model;

class Post  extends Model
{   
    // Properties / propriété
    protected $idpost;
    protected $title;
    protected $chapo;
    protected $content;
    protected $dateCreation;
    protected $user;
    
    // get = récupérer les champs(properties) de l'entité

    public function getIdpost(){
        return $this->idpost;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getChapo(){
        return $this->chapo;
    }
    public function getContent(){
        return $this->content;
    }
    public function getDateCreation(){
        return $this->dateCreation;
    }
    public function getUser(){
        return $this->user;
    }

    // set = insérer une donnée dans le champs(properties) de l'entité
    
    public function setIdpost($idpost){
         $this->idpost = $idpost;
    }
    public function setTitle($title){
         $this->title = $title;
    }
    public function setChapo($chapo){
         $this->chapo = $chapo;
    }
    public function setContent($content){
         $this->content = $content;
    }
    public function setDateCreation($dateCreation){
        $this->dateCreation = $dateCreation;
    }
    public function setUser(User $user){
        $this->user= $user;
    }
}



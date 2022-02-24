<?php

namespace Blog\Model\Entity;

class Post 
{   
    // Properties / propriété
    protected $idpost;
    protected $title;
    protected $chapo;
    protected $comment;
    protected $dateCreation;
    
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
    public function getComment(){
        return $this->comment;
    }
    public function getDateCreation(){
        return $this->dateCreation;
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
    public function setComment($comment){
         $this->comment = $comment;
    }
    public function setDateCreation($dateCreation){
        $this->dateCreation = $dateCreation;
    }
}


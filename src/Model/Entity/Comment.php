<?php

namespace Blog\Model\Entity;

class Comment
{

    protected $idcomment;
    protected $content;
    protected $dateCreation;
    protected $disabled;
    
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
}

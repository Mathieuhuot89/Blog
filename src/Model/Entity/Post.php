<?php

namespace Blog\Model\Entity;

class Post
{
    public function __construct(public string $title, public string $chapo, public string $comment, public \Datetime $dateCreation)
    {
        
    }

}
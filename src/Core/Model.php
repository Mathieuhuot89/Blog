<?php

namespace Blog\Core;

abstract class Model
{
    use Hydrator;
    public function __construct($data=[])
    {   
        if ($data){
            $this->hydrate($data);
        }
    }
}

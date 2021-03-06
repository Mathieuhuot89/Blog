<?php

namespace Blog\Core;

trait Hydrator
 {  
     public function hydrate($data)
     {  
        foreach ($data as $key=>$value){
            $key = str_replace('_', '', $key);
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }

        
     }
 }
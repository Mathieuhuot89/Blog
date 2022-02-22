<?php

namespace Blog\Core;

class Managers{

    public function getManager($entity)
    {
        $manager = "\\Blog\\Model\\Manager\\".$entity."Manager";
        $object = new $manager;
        return $object;
    }
}
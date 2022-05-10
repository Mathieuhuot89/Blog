<?php

namespace Blog\Core;

use Blog\Core\PDOConnection;
use Blog\Core\View;

class Controller
{
    protected $view;
    protected $managers;

    public function __construct()
    {
        $this->view = new View();
        $this->managers = new Managers();
    }
}

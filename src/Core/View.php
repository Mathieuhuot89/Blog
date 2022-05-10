<?php

namespace Blog\Core;

class view
{
    private $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../View');
        $this->twig = new \Twig\Environment($loader);
    }

    public function show($page, $options)
    {
        echo $this->twig->render($page, $options);
    }
}
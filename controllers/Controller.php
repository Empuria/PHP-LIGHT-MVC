<?php

namespace Controllers;

class Controller
{
    protected $twig;

    function __construct()
    {
      //$className = substr(get_class($this), 12, -10);
      //$loader = new \Twig\Loader\FilesystemLoader('.app/views/' . strtolower($className));
      $loader = new \Twig\Loader\FilesystemLoader('./views/');
      $this->twig = new \Twig\Environment($loader, array(
        'cache' => false,
    ));

      
      
    }
}
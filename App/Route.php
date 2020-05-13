<?php

namespace App;

use Frigelar\Init\Bootstrap;

class Route extends Bootstrap 
{

  protected function initRoutes()
  {
    $routes['login'] = array('route'=>'/', 'controller'=>"LoginController", 'action'=>'index');
    //$routes['home'] = array('route'=>'/', 'controller'=>"WelcomeController", 'action'=>'index');
    //$routes['contact'] = array('route'=>'/contact', 'controller'=>"indexController", 'action'=>'contact');
    $this->setRoutes($routes);
  }
}
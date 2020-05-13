<?php

namespace App;

use Frigelar\Init\Bootstrap;

/*
*    Example create new routes
*   
*    http://localhost:8000/
*    $routes['home'] = array('route'=>'/', 'controller'=>"WelcomeController", 'action'=>'index');
*    
*    http://localhost:8000/contact
*    $routes['contact'] = array('route'=>'/contact', 'controller'=>"indexController", 'action'=>'contact');
*
*/

class Route extends Bootstrap 
{

  protected function initRoutes()
  {
    $routes['login'] = array('route'=>'/', 'controller'=>"LoginController", 'action'=>'index');
    
    $this->setRoutes($routes);
  }
}
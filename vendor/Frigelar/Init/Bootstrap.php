<?php 

namespace Frigelar\Init;

abstract class Bootstrap 
{
  private $routes; 

  public function __construct()
  {
    $this->initRoutes();
    $this->run($this->getUrl());
  }

  abstract protected function initRoutes();

  protected function run($url)
  {
    array_walk($this->routes, function($route) use ($url){
      if($url == $route['route']) {
        $class = "App\\Controllers\\".ucfirst($route['controller']);
        $controller = new $class;
        $action = $route['action'];
        $controller->$action();
      } else {
        require_once "../public/images/ErrorImages/ErrorImages.php";
      }
    });
  } 

  protected function getUrl()
  {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }

  protected function setRoutes(array $routes)
  {
    $this->routes = $routes;
  }
}
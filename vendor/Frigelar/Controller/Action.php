<?php 

namespace Frigelar\Controller;

abstract class Action {

  protected $view;
  private $action;

  public function __construct()
  {
    $this->view = new \stdClass;
  }

  protected function render($action, $layout = true) 
  {
    $this->action = $action;

    if ($layout == true && file_exists("../App/Views/Layout.php")) {
      include_once "../App/Views/Layout.php";
    } else {
      $this->content();
    }
  }

  protected function content()
  {
    $current = get_class($this);
    $singleClassName = strtolower((str_replace("Controller", "", str_replace("App\\Controllers\\", "", $current))));
    include_once "../App/Views/".$singleClassName."/".$this->action.".php";
  }
}
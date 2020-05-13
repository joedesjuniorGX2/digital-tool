<?php 

namespace App\Controllers;

use Frigelar\Controller\Action;

class LoginController extends Action
{
  public function index()
  {

    
    $this->render("loginView");
  }
}
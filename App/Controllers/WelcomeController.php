<?php 

namespace App\Controllers;

use Frigelar\Controller\Action;

class WelcomeController extends Action 
{
  public function index()
  {
    $this->render('welcome');
  }
}
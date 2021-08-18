<?php

namespace App\Controllers;

use Core\View;

abstract class AbstractController
{
  protected function generateView($part, $name, $data = NULL)
  {
    View::view($part, $name, $data);
  }
}
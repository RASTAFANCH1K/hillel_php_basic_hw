<?php

namespace App\Controllers;

use Core\View;

abstract class AbstractController
{
  protected function generateView(string $part, string $name, array $data = NULL)
  {
    View::view($part, $name, $data);
  }
}
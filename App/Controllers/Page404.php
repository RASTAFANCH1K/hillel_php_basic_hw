<?php

namespace App\Controllers;

class Page404
{
  protected $className = 'Page not found';

  public function __construct()
  {
    echo $this->className . '<br>';
  }
}
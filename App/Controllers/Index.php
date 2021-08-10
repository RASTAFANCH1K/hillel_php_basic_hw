<?php

namespace App\Controllers;

class Index
{
  protected $className = 'Index';

  public function __construct()
  {
    echo $this->className;
  }
}
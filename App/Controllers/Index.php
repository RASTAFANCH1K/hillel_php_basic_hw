<?php

namespace App\Controllers;

class Index
{
  protected $className = 'Index';

  public function __construct()
  {
  }

  public function index() {
    echo $this->className . '<br>';
  }
}
<?php

namespace App\Controllers;

class About
{
  protected $className = 'About';

  public function __construct()
  {
    echo $this->className . '<br>';
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
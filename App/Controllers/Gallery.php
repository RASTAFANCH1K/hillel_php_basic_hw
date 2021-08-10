<?php

namespace App\Controllers;

class Gallery
{
  protected $className = 'Gallery';

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
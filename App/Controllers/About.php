<?php

namespace App\Controllers;

use Core\View;

class About
{
  protected $className = 'About';

  public function index() {
    $data = [
      'head' => [
        'title' => 'About',
      ],
      'body' => [
        'heading' => 'ABOUT',
      ],
      'list' => ['about one', 'about two', 'about three'],
    ];

    View::view('about', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
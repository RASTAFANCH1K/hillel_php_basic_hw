<?php

namespace App\Controllers\Home;

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
        'paragraph' => 'This page is about everything',
      ],
    ];

    View::view('home', 'about', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
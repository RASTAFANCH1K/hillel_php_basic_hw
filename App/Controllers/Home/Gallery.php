<?php

namespace App\Controllers\Home;

use Core\View;

class Gallery
{
  protected $className = 'Gallery';

  public function index() {
    $data = [
      'head' => [
        'title' => 'Gallery',
      ],
      'body' => [
        'heading' => 'GALLERY',
        'paragraph' => 'There are lot\'s of various photos',
      ],
    ];

    View::view('home', 'gallery', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
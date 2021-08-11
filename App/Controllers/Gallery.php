<?php

namespace App\Controllers;

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
      ],
      'list' => ['gallery one', 'gallery two', 'gallery three'],
    ];

    View::view('gallery', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
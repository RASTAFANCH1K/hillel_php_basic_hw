<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;

class Index extends AbstractController
{
  protected $className = 'Index';

  public function index() {
    $data = [
      'head' => [
        'title' => 'Index',
      ],
      'body' => [
        'heading' => 'INDEX',
        'paragraph' => 'List of available pages:',
        'list' => [
          'admin',
          'admin/hi', 
          'admin/bye', 
          'about', 
          'about/hi', 
          'about/bye', 
          'gallery',
          'gallery/hi', 
          'gallery/bye'
        ],
      ],
    ];

    $this->generateView('home', 'index', $data);
  }
}
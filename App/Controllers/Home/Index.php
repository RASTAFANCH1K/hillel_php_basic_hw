<?php

namespace App\Controllers\Home;

use Core\View;

class Index
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

    View::view('home', 'index', $data);
  }
}
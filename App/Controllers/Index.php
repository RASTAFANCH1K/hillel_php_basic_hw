<?php

namespace App\Controllers;

use Core\View;

class Index
{
  public function index() {
    $data = [
      'head' => [
        'title' => 'Index',
      ],
      'body' => [
        'heading' => 'INDEX',
      ],
      'list' => ['index one', 'index two', 'index three'],
    ];

    View::view('index', $data);
  }
}
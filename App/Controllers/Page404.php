<?php

namespace App\Controllers;

use Core\View;

class Page404
{
  public function index() {
    $data = [
      'head' => [
        'title' => 'Page404',
      ],
      'body' => [
        'heading' => 'PAGE 404',
      ],
      'list' => ['page404 one', 'page404 two', 'page404 three'],
    ];

    View::view('page404', $data);
  }
}
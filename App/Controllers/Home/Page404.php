<?php

namespace App\Controllers\Home;

use Core\View;

class Page404
{
  public function index() {
    $data = [
      'head' => [
        'title' => 'Page 404',
      ],
      'body' => [
        'heading' => 'PAGE 404',
        'paragraph' => 'Sorry, required page does not exist',
      ],
    ];

    View::view('home', 'page404', $data);
  }
}
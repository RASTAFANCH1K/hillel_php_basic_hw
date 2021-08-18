<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;

class Page404 extends AbstractController
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

    $this->generateView('home', 'page404', $data);
  }
}
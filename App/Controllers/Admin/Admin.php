<?php

namespace App\Controllers\Admin;

use Core\View;

class Admin
{
  protected $className = 'Admin';

  public function index() {
    $data = [
      'head' => [
        'title' => 'Admin',
      ],
      'body' => [
        'heading' => 'ADMIN',
        'paragraph' => 'Welcome to admin page'
      ],
    ];

    View::view('admin', 'admin', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
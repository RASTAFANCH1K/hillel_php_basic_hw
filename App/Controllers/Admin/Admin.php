<?php

namespace App\Controllers\Admin;

use App\Controllers\AbstractController;

class Admin extends AbstractController
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

    $this->gener('admin', 'admin', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
<?php

namespace App\Controllers\Admin;

use App\Controllers\AbstractController;
use App\Model\Admin as AdminModel;

class Admin extends AbstractController
{
  /** @var  string */
  protected $className = 'Admin';

  public function index() {
    $model = new AdminModel;

    $data = [
      'id' =>  $model->getId(),
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
      'list' => $model->getList(),
      'listItem' => $model->getListItem('special'),
    ];

    $this->generateView('admin', 'admin', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Model\About as AboutModel;

class About extends AbstractController
{
  protected $className = 'About';

  public function index() {
    $model = new AboutModel;

    $data = [
      'id' =>  $model->getId(),
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
      'list' => $model->getList(),
      'listItem' => $model->getListItem('special'),
    ];

    $this->generateView('home', 'about', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
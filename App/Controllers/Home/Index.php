<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Model\Index as IndexModel;

class Index extends AbstractController
{
  /** @var  string */
  protected $className = 'Index';

  public function index() {
    $model = new IndexModel;

    $data = [
      'id' =>  $model->getId(),
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
      'list' => $model->getList(),
      'listItem' => $model->getListItem('special'),
    ];

    $this->generateView('home', 'index', $data);
  }
}
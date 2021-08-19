<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Model\Page404 as Page404Model;

class Page404 extends AbstractController
{
  /** @var  string */
  protected $className = 'Page404';

  public function index() {
    $model = new Page404Model;

    $data = [
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
    ];

    $this->generateView('home', 'page404', $data);
  }
}
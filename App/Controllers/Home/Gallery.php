<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Model\Gallery as GalleryModel;

class Gallery extends AbstractController
{
  /** @var  string */
  protected $className = 'Gallery';

  public function index() {
    $model = new GalleryModel;

    $data = [
      'id' =>  $model->getId(),
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
      'list' => $model->getList(),
      'listItem' => $model->getListItem('special'),
    ];

    $this->generateView('home', 'gallery', $data);
  }

  public function hi() {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  public function bye() {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}
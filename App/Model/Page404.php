<?php

namespace App\Model;

use App\Model\AbstractModel;

class Page404 extends AbstractModel
{
  /** @var  string */
  protected $title = 'Page 404';

  /** @var  string */
  protected $paragraph = 'Sorry, required page does not exist';

  /**
   *  @return string
   */
  public function getTitle():string
  {
    return $this->title;
  }

  /**
   *  @return string
   */
  public function getParagraph():string
  {
    return $this->paragraph;
  }
}
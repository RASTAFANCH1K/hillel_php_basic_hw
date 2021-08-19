<?php

namespace App\Model;

use App\Model\AbstractModel;

class Gallery extends AbstractModel
{
  /** @var  int */
  protected $id = 3;

  /** @var  string */
  protected $title = 'Gallery';

  /** @var  string */
  protected $paragraph = 'There are lot\'s of various photos';

  /** @var array */
  protected $list = [
    'one' => 'gallery first',
    'two' => 'gallery second', 
    'three' => 'gallery third',
    'special' => 'gallery special',
  ];

  /**
   *  @return int
   */
  public function getId():int
  {
    return $this->id;
  }

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

  /**
   *  @return array
   */
  public function getList():array
  {
    return $this->list;
  }

  /**
   *  @param string
   *  @return string
   */
  public function getListItem(string $item):string
  {
    $listItem = $this->checkKeyExistence($item, $this->list);
    
    return $listItem;
  }
}
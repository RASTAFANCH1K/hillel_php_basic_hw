<?php

namespace App\Model;

use App\Model\AbstractModel;

class About extends AbstractModel
{
  /** @var  int */
  protected $id = 2;

  /** @var  string */
  protected $title = 'About';

  /** @var  string */
  protected $paragraph = 'This page is about everything';

  /** @var array */
  protected $list = [
    'one' => 'about first',
    'two' => 'about second', 
    'three' => 'about third',
    'special' => 'about special',
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
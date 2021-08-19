<?php

namespace App\Model;

use App\Model\AbstractModel;

class Admin extends AbstractModel
{
  /** @var  int */
  protected $id = 4;

  /** @var  string */
  protected $title = 'Admin';

  /** @var  string */
  protected $paragraph = 'Welcome to admin page';

  /** @var array */
  protected $list = [
    'one' => 'admin first',
    'two' => 'admin second', 
    'three' => 'admin third',
    'special' => 'admin special',
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
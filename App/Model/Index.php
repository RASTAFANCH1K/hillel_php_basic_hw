<?php

namespace App\Model;

use App\Model\AbstractModel;

class Index extends AbstractModel
{
  /** @var  int */
  protected $id = 1;

  /** @var  string */
  protected $title = 'Index';

  /** @var  string */
  protected $paragraph = 'List of available pages:';

  /** @var array */
  protected $list = [
    'one' =>  'admin',
    'two' => 'admin/hi', 
    'three' => 'admin/bye', 
    'four' => 'about', 
    'five' =>'about/hi', 
    'six' =>'about/bye', 
    'seven' => 'gallery',
    'eight' =>'gallery/hi', 
    'nine' =>'gallery/bye',
    'special' => 'index special',
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
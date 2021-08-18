<?php

namespace App\Model;

use App\Model\AbstractModel;

class About extends AbstractModel
{
  private $data = [
    'id' => 2,
    'title' => 'About',
    'paragraph' => 'This page is about everything',
    'list' => [
      'one' => 'about first',
      'two' => 'about second', 
      'three' => 'about third',
      'special' => 'about special',
    ],
  ];

  public function getId()
  {
    $id = $this->checkKeyExistence('id', $this->data);

    return $id;
  }

  public function getTitle()
  {
    $title = $this->checkKeyExistence('title', $this->data);

    return $title;
  }

  public function getParagraph()
  {
    $title = $this->checkKeyExistence('paragraph', $this->data);

    return $title;
  }

  public function getList()
  {
    $list = $this->checkKeyExistence('list', $this->data);

    return $list;
  }

  public function getListItem($item)
  {
    $list = $this->checkKeyExistence('list', $this->data);
    $listItem = $this->checkKeyExistence($item, $list);
    
    return $listItem;
  }
}
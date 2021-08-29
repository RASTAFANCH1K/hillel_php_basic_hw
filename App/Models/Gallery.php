<?php

namespace App\Models;

use App\Models\AbstractModel;

class Gallery extends AbstractModel
{
  protected $queryArr = [
    'select' => 'gallery.id as gallery_id, gallery.title as gallery_title',
    'table' => 'gallery',
  ];

  public function test()
  {
    return $this->fetchSQLArr3($this->queryArr);
    // return $this->fetchSQLArr2();

  }
}
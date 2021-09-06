<?php

namespace App\Models;

use App\Models\AbstractModel;

class InsertSandbox extends AbstractModel
{
  public function index()
  {
    $this->dbInsert->setTableName('insert_sandbox');

    $this->dbInsert->setData([
      'title' => 'Hello',
      'descriptions' => 'About Hello'
    ]);

    $res = $this->InsertSandbox();

    return $res;
  }
}
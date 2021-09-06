<?php

namespace App\Models;

use App\Models\AbstractModel;

class UpdateSandbox extends AbstractModel
{
  public function index()
  {
    $this->dbUpdate->setTableName('insert_sandbox');

    $this->dbUpdate->setCond('insert_sandbox.id = 2');

    $this->dbUpdate->setData([
      'title' => 'Hello2',
      'descriptions' => 'About Hello2'
    ]);

    $res = $this->UpdateSandbox();

    return $res;
  }
}
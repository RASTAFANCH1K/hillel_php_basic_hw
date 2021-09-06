<?php

namespace App\Models;

use App\Models\AbstractModel;

class DeleteSandbox extends AbstractModel
{
  public function index()
  {
    $this->dbDelete->setTableName('insert_sandbox');

    $this->dbDelete->setCond('insert_sandbox.id = 1');

    $res = $this->DeleteSandbox();

    return $res;
  }
}
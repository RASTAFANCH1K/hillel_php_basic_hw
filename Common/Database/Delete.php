<?php

namespace Common\Database;

class Delete extends Where
{
  private $tableName;

  public function generateDeleteString():string
  {
    return 'DELETE FROM ' . $this->tableName . ' WHERE ' . $this->cond;
  }

  public function setTableName($tableName):void
  {
    $this->tableName = $tableName;
  }
}
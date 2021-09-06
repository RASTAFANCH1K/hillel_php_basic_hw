<?php

namespace Common\Database;

class SQLClass
{
  protected $tableName;

  public function setTableName(string $tableName):void
  {
    $this->tableName = $tableName;
  }
}
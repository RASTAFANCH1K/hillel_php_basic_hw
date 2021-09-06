<?php

namespace Common\Database;

class Insert 
{
  private $tableName;
  private $data = [];

  public function generateInsertString():string
  {
    $keys = array_values($this->data);
    $newKeys = [];

    foreach ($keys as $val) {
      $newKeys[] = "'" . $val . "'";
    }

    return 'INSERT INTO ' . $this->tableName . ' (' .  implode(', ', array_keys($this->data)) . ')' . ' VALUES' . ' (' . implode(', ', array_values($newKeys)) . ')'; 
  }

  /**
   * @param mixed $tableName
   */
  public function setTableName(string $tableName):void
  {
    $this->tableName = $tableName;
  }

  /**
   * @param array $data
   */
  public function setData(array $data):void
  {
    $this->data = $data;
  }
}
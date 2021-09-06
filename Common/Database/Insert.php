<?php

namespace Common\Database;

class Insert extends Where
{
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
   * @param array $data
   */
  public function setData(array $data):void
  {
    $this->data = $data;
  }
}
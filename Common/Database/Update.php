<?php

namespace Common\Database;

class Update extends Where
{
  private $data;

  public function generateUpdateString()
  {
    return 'UPDATE ' . $this->tableName . ' SET ' . $this->data . ' WHERE ' . $this->cond;
  }

  public function setData($arr):void
  {
    $result = '';

    foreach ($arr as $key => $val) {
      if (!empty($result)) {
        $result .= ', ';
      }
  
      $result .= $key . ' = ' . "'" . $val  . "'";
    }

    $this->data = $result;
  }
}
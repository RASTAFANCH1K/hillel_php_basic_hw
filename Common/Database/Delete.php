<?php

namespace Common\Database;

class Delete extends Where
{
  public function generateDeleteString():string
  {
    return 'DELETE FROM ' . $this->tableName . ' WHERE ' . $this->cond;
  }
}
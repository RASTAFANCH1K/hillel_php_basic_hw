<?php

namespace Common\Database;

class Select {
  protected $queryArr;
  protected $select;
  protected $table;

  public function createQuery($queryArr)
  {
    $this->select = $queryArr['select'];

    $this->table = $queryArr['table'];

    $query = "SELECT $this->select FROM $this->table";
    
    return $query;
  }
}
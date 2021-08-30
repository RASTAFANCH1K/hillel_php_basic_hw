<?php

namespace Common\Database;

class Select {
  protected $select = '*'; //! Default value
  protected $from;
  protected $joinType;
  protected $joinTable;
  protected $on;
  protected $where;
  protected $orderBy;
  protected $limit;

  public function createQuery($queryArr)
  {
    foreach ($queryArr as $key => $val) {
      if (is_array($val)) {
        $stringifiedArr = implode(', ', $val);
  
        $this->{$key} = $stringifiedArr;
      } else if (is_string($val)) {
        if (array_key_exists($key, $queryArr)) {
          if (isset($key)) {
            $this->{$key} = $val;
          }
        }
      }
    }

    $selectPart = "SELECT $this->select FROM $this->from";

    if ($this->joinType && $this->joinTable && $this->on) {
      $joinPart = "$this->joinType $this->joinTable ON $this->on";
    } else {
      $joinPart = '';
    }

    if ($this->where) {
      $wherePart = "WHERE $this->where";
    } else {
      $wherePart = '';
    }

    if ($this->orderBy) {
      $orderPart = "ORDER BY $this->orderBy";
    } else {
      $orderPart = '';
    }

    if ($this->limit) {
      $limitPart = "LIMIT $this->limit";
    } else {
      $limitPart = '';
    }

    $query = $selectPart . ' ' . $joinPart . ' ' . $wherePart . ' ' . $orderPart . ' ' .  $limitPart;

    return $query;
  }
}
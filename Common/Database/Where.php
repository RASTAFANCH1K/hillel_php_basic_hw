<?php

namespace Common\Database;

class Where
{
  protected $cond;

  public function setCond($cond = NULL)
  {
    $this->cond = $cond;

    $args = func_get_args();

    if (is_string($args[0])) {
      $this->cond;
    } elseif (is_array($args[0])) {
      $baseArr = $args[0];
      $isStringKey = NULL;

      $arrKeys = array_keys($baseArr);

      foreach ($arrKeys as $arrVal) {
        if (is_string($arrVal)) {
          $isStringKey = true;
        } else {
          $isStringKey = false;
        }
      }

      if ($isStringKey) {
        $leftCond = $baseArr['leftCond'];
        $operator = $baseArr['operator'];
        $rightCond = $baseArr['rightCond'];
  
        $res = $leftCond . ' ' . $operator . ' ' . $rightCond;
  
        $this->cond = $res;
      } else {
        $clause = '';
        $secArr = [];
        $str = '';
        $res = '';
  
        foreach ($baseArr as $val) {
          if (is_string($val)) {
            $clause .= $val;
          } elseif (is_array($val)) {
            array_push($secArr, $val);
          }
        }
  
        array_splice($secArr[0], 3, 0, $clause);
  
        foreach ($secArr as $innerArr) {
          if (is_array($innerArr)) {
            $str .= implode(' ', $innerArr);
          }
        }
  
        $strExplode = explode($clause, $str);
  
        $res .= $strExplode[0] . $clause . ' ' . $strExplode[1];
      
        $this->cond = $res;
      }
    }
  }
}
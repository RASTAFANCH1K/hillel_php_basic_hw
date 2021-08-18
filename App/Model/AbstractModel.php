<?php

namespace App\Model;

abstract class AbstractModel
{
  public function checkKeyExistence($key, $arr)
  {
    if (array_key_exists($key, $arr)) {
      return $arr[$key];
    } else {
      return false;
    }
  }
}
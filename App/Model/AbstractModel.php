<?php

namespace App\Model;

abstract class AbstractModel
{
  public function checkKeyExistence(string $key, array $arr)
  {
    if (array_key_exists($key, $arr)) {
      return $arr[$key];
    } else {
      return false;
    }
  }
}
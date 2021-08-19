<?php

namespace Core;

class View
{
  public static function view(string $part, string $name, array $data = NULL)
  {
    require 'Web/' . $part . '/' . $name . '.php';
  }
}
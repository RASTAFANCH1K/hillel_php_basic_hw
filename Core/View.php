<?php

namespace Core;

class View
{
  public static function view($part, $name, $data = NULL)
  {
    require 'Web/' . $part . '/' . $name . '.php';
  }
}
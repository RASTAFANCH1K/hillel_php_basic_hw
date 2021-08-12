<?php

namespace Core;

use App\Controllers\Home\Index;
use App\Controllers\Home\Page404;

final class Router
{
  private $url;

  public function __construct()
  {
    $this->url = $_SERVER['PATH_INFO'] ?? NULL;
  }

  public function run()
  {
    $urlArr = explode('/', $this->url);
    $controller = $urlArr[1];
    $action = $urlArr[2];

    if (isset($controller)) {
      if ($controller == 'admin') {
        $namespace = "App\\Controllers\\Admin\\" . ucfirst($controller);
      } else {
        $namespace = "App\\Controllers\\Home\\" . ucfirst($controller);
      }

      if (class_exists($namespace)) {
        $page = new $namespace;

        if ($action) {
          if (method_exists($page, $action)) {
            $page->$action();
          } else {
            $page = new Page404();
            $page->index();
          }
        } elseif ($action == '') {
            $page->index();
        } else {
            $page = new Page404();
            $page->index();
        }
      } else {
        $page = new Page404();
        $page->index();
      }
    } else {
      $page = new Index();
      $page->index();
    }

    return $page;
  }
}
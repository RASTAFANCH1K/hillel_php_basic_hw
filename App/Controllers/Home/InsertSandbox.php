<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Models\InsertSandbox as InsertSandboxModel;

class InsertSandbox extends AbstractController
{
  /**
   * @return void
   */
  public function index():void {
    $model = new InsertSandboxModel;

    $data = [
      'index' => $model->index(),
    ];

    $this->generateView('home', 'insertSandbox', $data);
  }
}
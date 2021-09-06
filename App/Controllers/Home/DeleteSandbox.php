<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Models\DeleteSandbox as DeleteSandboxModel;

class DeleteSandbox extends AbstractController
{
  /**
   * @return void
   */
  public function index():void {
    $model = new DeleteSandboxModel;

    $data = [
      'index' => $model->index(),
    ];

    $this->generateView('home', 'deleteSandbox', $data);
  }
}
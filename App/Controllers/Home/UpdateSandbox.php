<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Models\UpdateSandbox as UpdateSandboxModel;

class UpdateSandbox extends AbstractController
{
  /**
   * @return void
   */
  public function index():void {
    $model = new UpdateSandboxModel;

    $data = [
      'index' => $model->index(),
    ];

    $this->generateView('home', 'updateSandbox', $data);
  }
}
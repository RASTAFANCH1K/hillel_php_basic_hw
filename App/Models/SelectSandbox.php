<?php

namespace App\Models;

use App\Models\AbstractModel;

class SelectSandbox extends AbstractModel
{
  /**
   * @var array $queryArr
   */
  protected $queryArr = [
    'select' => [
      'select_sandbox.id as select_sandbox_id',
      'post.id as post_id',
    ], //! "*" On default
    'from' => 'select_sandbox', //! Must have value
    'joinType' => 'INNER JOIN',
    'joinTable' => 'post',
    'on' => 'select_sandbox.id = post.select_sandbox_id',
    'where' => '', // select_sandbox.id = 2
    'orderBy' => '', // select_sandbox.id DESC
    'limit' => '', // 4
  ];

  /**
   * @return array
   */
  public function index()
  {
    $res = $this->fetchSQLArrSandbox($this->queryArr);

    return $res;
  }
}
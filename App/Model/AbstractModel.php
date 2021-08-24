<?php

namespace App\Model;

use Common\Database\Connector;

abstract class AbstractModel
{
  /**
   * @var object $dbConnect
   */
  private $dbConnect;

  public function __construct()
  {
    $connector = new Connector();
    $this->dbConnect = $connector->connect();
  }

  /**
   *  @param string $table
   *  @return array
   */
  public function fetchSQLArr(string $table):array
  {
    $sql = "SELECT * FROM $table";
    $query = $this->dbConnect->query($sql);
    $res = $query->fetchAll();
  
    return $res;
  }

  /**
   * @param string $table
   * @param string $name
   * @return string
   */
  public function getFieldVal(string $table, string $name):string {
    $val = $this->fetchSQLArr($table)[0][$name];

    return $val;
  }

  /**
   * @param string $key
   * @param array $arr
   * @return string|bool
   */
  public function checkKeyExistence(string $key, array $arr)
  {
    if (array_key_exists($key, $arr)) {
      return $arr[$key];
    } else {
      return false;
    }
  }
}
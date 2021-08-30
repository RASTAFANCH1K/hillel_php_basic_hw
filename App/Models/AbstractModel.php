<?php

namespace App\Models;

use Common\Database\Connector;
use Common\Database\Select;

abstract class AbstractModel
{
  /**
   * @var object $dbConnect
   */
  private $dbConnect;

  private $dbSelect;


  public function __construct()
  {
    $connector = new Connector();
    $this->dbConnect = $connector->connect();
    $this->dbSelect = new Select();
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
   *  @param string $queryArr
   *  @return array
   */
  public function fetchSQLArrSandbox($queryArr)
  {
    $sql = $this->dbSelect->createQuery($queryArr);
    $query = $this->dbConnect->query($sql);
    $res = $query->fetchAll(\PDO::FETCH_ASSOC);
  
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
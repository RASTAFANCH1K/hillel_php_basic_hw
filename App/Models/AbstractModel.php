<?php

namespace App\Models;

use Common\Database\Connector;
use Common\Database\Select;
use Common\Database\Insert;
use Common\Database\Delete;
use Common\Database\Update;

abstract class AbstractModel
{
  /**
   * @var object $dbConnect
   */
  private $dbConnect;

  protected $dbSelect;

  protected $dbInsert;

  protected $dbDelete;

  protected $dbUpdate;

  public function __construct()
  {

    $connector = new Connector();
    $this->dbConnect = $connector->connect();
    $this->dbSelect = new Select();
    $this->dbInsert = new Insert();
    $this->dbDelete = new Delete();
    $this->dbUpdate = new Update();
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

  public function SelectSandbox()
  {
    $sql = $this->dbSelect->getSQL();
    $query = $this->dbConnect->query($sql);
    $res = $query->fetchAll(\PDO::FETCH_ASSOC);
  
    return $res;
  }

  public function InsertSandbox()
  {
    $sql = $this->dbInsert->generateInsertString();
    print_r($sql);
    $query = $this->dbConnect->exec($sql);
  
    return $query;
  }

  public function DeleteSandbox()
  {
    $sql = $this->dbDelete->generateDeleteString();
    print_r($sql);
    $query = $this->dbConnect->exec($sql);
  
    return $query;
  }

  public function UpdateSandbox()
  {
    $sql = $this->dbUpdate->generateUpdateString();
    print_r($sql);
    $query = $this->dbConnect->exec($sql);
  
    return $query;
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
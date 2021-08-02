<?php

//* 1. ==================================================

echo '1. Создать родительский (главный класс). 
Класс должен содержать 2 свойства. 
Каждое свойство должно иметь геттеры и сеттеры:' . '<br>';
echo '<br>';

class Weapon
{
  protected $quantity;
  protected $weight;

  /**
   *  @param int
   */
  
  public function setQuantity(int $quantity) : void
  {
    $this -> quantity = $quantity;
  }

  /**
   *  @return int
   */

  public function getQuantity() : int
  {
    return $this -> quantity;
  }
  
  /**
   *  @param int
   */

  public function setWeight(int $weight) : void
  {
    $this -> weight = $weight;
  }

  /**
   *  @return int
   */

  public function getWeight(): int
  {
    return $this -> weight;
  }
}

$weapon = new Weapon();
$weapon -> setQuantity(10);
$weapon -> setWeight(5);

echo 'quantity - ' . $weapon -> getQuantity() . '<br>';
echo 'weight - ' . $weapon -> getWeight() . '<br>';

echo '<br>';
echo '<hr>';

//* 2. ==================================================

echo '2. Создать 3 наследника родительского класса. 
Каждый наследник должен содержать одно свойство. 
Каждое свойство должно иметь геттер и сеттер. 
Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
Один наследник не должен быть наследуемым
Один из наследников должен содержать абстрактную функцию возведения в степень:' . '<br>';
echo '<br>';

class MachineGun extends Weapon
{
  protected $rateFire;

  /**
   *  @return int
   */

  public function add() : int
  {
    $quantity = $this -> quantity;
    $rateFire = $this -> rateFire;

    return $quantity + $rateFire;
  }

  /**
   *  @param int
   */
  
  public function setRateFire(int $rateFire) : void
  {
    $this -> rateFire = $rateFire;
  }

  /**
   *  @return int
   */

  public function getRateFire() : int
  {
    return $this -> rateFire;
  }
}

$submachineGun = new MachineGun();
$submachineGun -> setQuantity(5);
$submachineGun -> setRateFire(1500);

echo 'quantity - ' . $submachineGun -> getQuantity() . '<br>';
echo 'fire range - ' . $submachineGun -> getRateFire() . '<br>';
echo 'addition - ' . $submachineGun -> add() . '<br>';

echo '<br>';

//* __________________________________________________

final class Pistol extends Weapon
{
  protected $damage;

  /**
   *  @return int
   */

  public function subtract() : int
  {
    $weight = $this -> weight;
    $damage = $this -> damage;

    return $damage - $weight;
  }

  /**
   *  @param int
   */
  
  public function setDamage(int $damage) : void
  {
    $this -> damage = $damage;
  }

  /**
   *  @return int
   */

  public function getDamage() : int
  {
    return $this -> damage;
  }
}

$pistol = new Pistol();
$pistol -> setWeight(15);
$pistol -> setDamage(80);

echo 'weight - ' . $pistol -> getWeight() . '<br>';
echo 'damage - ' . $pistol -> getDamage() . '<br>';
echo 'subtraction - ' . $pistol -> subtract() . '<br>';

echo '<br>';

//* __________________________________________________

abstract class Grenade extends Weapon
{
  protected $fireRange;

  abstract protected function exponent(int $base, int $exp);

  /**
   *  @return int
   */

  public function multiply() : int
  {
    $quantity = $this -> quantity;
    $fireRange = $this -> fireRange;

    return $quantity * $fireRange;
  }

  /**
   *  @param int
   */
  
  public function setFireRange(int $fireRange) : void
  {
    $this -> fireRange = $fireRange;
  }

  /**
   *  @return int
   */

  public function getFireRange() : int
  {
    return $this -> fireRange;
  }
}

echo '<br>';
echo '<hr>';

//* 3. ==================================================

echo '3. Создать по 2 наследника от наследников первого уровня
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции:' . '<br>';
echo '<br>';

class Negev extends MachineGun
{
  protected $bullets;

  /**
   *  @return float
   */
  
  public function devide() : float
  {
    $rateFire = $this -> rateFire;
    $bullets = $this -> bullets;

    return $rateFire / $bullets;
  }

  /**
   *  @return int
   */
  
  public function modulo() : int
  {
    $quantity = $this -> quantity;
    $bullets = $this -> bullets;

    return $bullets % $quantity;
  }


  /**
   *  @param int
   */
  
  public function setBullets(int $bullets) : void
  {
    $this -> bullets = $bullets;
  }

  /**
   *  @return int
   */

  public function getBullets() : int
  {
    return $this -> bullets;
  }
}

$negev = new Negev();
$negev -> setRateFire(2000);
$negev -> setQuantity(7);
$negev -> setBullets(150);

echo 'fire range - ' . $negev -> getRateFire() . '<br>';
echo 'quantity - ' . $negev -> getQuantity() . '<br>';
echo 'bullets - ' . $negev -> getBullets() . '<br>';
echo 'devision - ' . $negev -> devide() . '<br>';
echo 'module - ' . $negev -> modulo() . '<br>';

echo '<br>';

//* __________________________________________________

class Maxim extends MachineGun
{
  protected $penetration;

  /**
   *  @return int
   */
  
  public function addAndSubtract() : int
  {
    $rateFire = $this -> rateFire;
    $penetration = $this -> penetration;

    return $rateFire + $penetration - 20;
  }

  /**
   *  @return int
   */
  
  public function multiplyAndDevide() : int
  {
    $weight = $this -> weight;
    $penetration = $this -> penetration;

    return $weight * $penetration / 2;
  }

  /**
   *  @param int
   */
  
  public function setPenetration(int $penetration) : void
  {
    $this -> penetration = $penetration;
  }

  /**
   *  @return int
   */

  public function getPenetration() : int
  {
    return $this -> penetration;
  }
}

$maxim = new Maxim();
$maxim -> setRateFire(3000);
$maxim -> setWeight(40);
$maxim -> setPenetration(80);

echo 'fire range - ' . $maxim -> getRateFire() . '<br>';
echo 'weight - ' . $maxim -> getWeight() . '<br>';
echo 'penetration - ' . $maxim -> getPenetration() . '<br>';
echo 'add and subtract - ' . $maxim -> addAndSubtract() . '<br>';
echo 'multiply and devide - ' . $maxim -> multiplyAndDevide() . '<br>';

echo '<br>';

//* __________________________________________________

class Lemon extends Grenade
{
  protected $price;

  /**
   *  @return int
   */

  public function exponent(int $base, int $exp) : int
  {
    return pow($base, $exp);
  }

  /**
   *  @return string
   */

  public function checkIfPriceLarger() : string {
    $quantity = $this -> quantity;
    $price = $this -> price;


    return boolval($price > $quantity) ? 'true' : 'false';
  }

  /**
   *  @return string
   */

  public function checkIfPriceSmaller() : string {
    $fireRange = $this -> fireRange;
    $price = $this -> price;


    return boolval($price < $fireRange) ? 'true' : 'false';
  }

  /**
   *  @param int
   */
  
  public function setPrice(int $price) : void
  {
    $this -> price = $price;
  }

  /**
   *  @return int
   */

  public function getPrice() : int
  {
    return $this -> price;
  }
}

$lemon = new Lemon();
$lemon -> setQuantity(2);
$lemon -> setFireRange(10);
$lemon -> setPrice(300);

echo 'quantity - ' . $lemon -> getQuantity() . '<br>';
echo 'fire range - ' . $lemon -> getFireRange() . '<br>';
echo 'price - ' . $lemon -> getPrice() . '<br>';
echo 'exponent - ' . $lemon -> exponent(2, 2) . '<br>';
echo 'check if price larger - ' . $lemon -> checkIfPriceLarger() . '<br>';
echo 'check if price smaller - ' . $lemon -> checkIfPriceSmaller() . '<br>';

echo '<br>';

//* __________________________________________________

class BaseBall extends Grenade
{
  protected $roundLimit;

  /**
   *  @return int
   */

  public function exponent(int $base, int $exp) : int
  {
    return pow($base, $exp);
  }

  /**
   *  @return int
   */

  public function devideAndAdd() : int {
    $weight = $this -> weight;
    $roundLimit = $this -> roundLimit;


    return $weight / $roundLimit + $weight;
  }

  /**
   *  @return int
   */

  public function multiplyAndSubstract() : int {
    $fireRange = $this -> fireRange;
    $roundLimit = $this -> roundLimit;


    return $fireRange * $roundLimit - $fireRange;
  }

  /**
   *  @param int
   */
  
  public function setRoundLimit(int $roundLimit) : void
  {
    $this -> roundLimit = $roundLimit;
  }

  /**
   *  @return int
   */

  public function getRoundLimit() : int
  {
    return $this -> roundLimit;
  }
}

$baseBall = new BaseBall();
$baseBall -> setWeight(6);
$baseBall -> setFireRange(15);
$baseBall -> setRoundLimit(3);

echo 'weight - ' . $baseBall -> getWeight() . '<br>';
echo 'fire range - ' . $baseBall -> getFireRange() . '<br>';
echo 'round limit - ' . $baseBall -> getRoundLimit() . '<br>';
echo 'exponent - ' . $baseBall -> exponent(4, 4) . '<br>';
echo 'devide and add - ' . $baseBall -> devideAndAdd() . '<br>';
echo 'multiply and substract - ' . $baseBall -> multiplyAndSubstract() . '<br>';

echo '<br>';
<?php

//* 1. ==================================================

echo '1. Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение:' . '<br>';
echo '<br>';

function checkDataType($val) {
  $res = gettype($val);

  return $res;
}

echo '1. ' . checkDataType(100) . '<br>';
echo '2. ' . checkDataType(100.1) . '<br>';
echo '3. ' . checkDataType('string') . '<br>';
echo '4. ' . checkDataType(true) . '<br>';
echo '5. ' . checkDataType(false) . '<br>';
echo '6. ' . checkDataType([]) . '<br>';
echo '7. ' . checkDataType(new stdClass()) . '<br>';
echo '8. ' . checkDataType(fopen("foo", "w")) . '<br>';
echo '9. ' . checkDataType(NULL) . '<br>';

echo '<br>';
echo '<hr>';

//* 2. ==================================================

echo '2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false:' . '<br>';
echo '<br>';
echo '"to be or not to be that is the question"' . '<br>'; 
echo '<br>';

function countLettersInStr($str, $letter) {
  if (is_string($str) && is_string($letter)) {
    $res = substr_count($str, $letter);

    return $res;
  } else {
    echo 'passed argument must be a string';
    return false;
  }
}

echo countLettersInStr('to be or not to be that is the question', 'b') . '<br>';

echo '<br>';
echo '<hr>';

//* 3. ==================================================

echo '3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины:' . '<br>';
echo '<br>';
echo 'Variant 1' . '<br>';
echo '<br>';

$arr = [
  'one' => 1,
  'two' => 3,
  'three' => [
    'four' => 4,
    'five' => 5,
    'six' => [
      'seven' => 7,
      'eight' => 8,
      'nine' => 9
    ]
  ]
];

echo '<pre>';
print_r($arr);
echo '</pre>';

function getSumOfAllArrElementsVal(array $arr) {
  $sum = 0;

  foreach ($arr as $key => $val) {
    if (is_array($val)) {
      $sum += getSumOfAllArrElementsVal($val);
    } else {
      $sum += $val;
    }
  }

  return $sum;
}

echo getSumOfAllArrElementsVal($arr) . '<br>';

echo '<br>';
echo 'Variant 2' . '<br>';
echo '<br>';

function getSumOfAllArrElementsVal2(array $arr) : int {
  $sum = 0;

  array_walk_recursive($arr, function($num) use (&$sum) {
      $sum += $num;
  });

  return  $sum;
}

echo getSumOfAllArrElementsVal2($arr) . '<br>';

echo '<br>';
echo '<hr>';

//* 4. ==================================================

echo '4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float:' . '<br>';
echo '<br>';
echo 'Variant 1' . '<br>';
echo '<br>';


function squaring($sqrFirst, $sqrSecond) : float {
  $res = 0;

  if ($sqrFirst < $sqrSecond) {
    $res = ($sqrSecond * $sqrSecond) / ($sqrFirst * $sqrFirst);
  } else {
    $res = ($sqrFirst * $sqrFirst) / ($sqrSecond * $sqrSecond);
  }

  return $res;
}

echo squaring(1, 9) . '<br>';
echo squaring(3, 9) . '<br>';
echo squaring(5, 9) . '<br>';
echo squaring(9, 9) . '<br>';

echo '<br>';
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hillel homeworks">
    <title>HW-2</title>
    <style>
      h6 {
        margin: 0 0 10px 0;
        font-weight: 400;
        font-size: 18px;
      }

      li {
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #000;
      }

      li:last-child {
        border-bottom: 0;
      }

      b,
      em {
        display: inline-block;
      }

      span {
        display: block;
        margin-right: 4px;
        color: red;
      }
    </style>
  </head>
  <body>
    <ol>
      <li>
        <h6>$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6]; Посчитать длину массива:</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

              echo getArrLength($arr);
            ?>
          </span>
          <em>(count())</em>
        </div>
      </li>
      <li>
        <h6>$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6]; Переместить первые 4 элемента массива в конец массива:</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

              echo shiftChosenArrElementsToEnd($arr, 4);
            ?>
          </span>
          <em>(array_splice() + array_push() + ...)</em>
        </div>
      </li>
      <li>
        <h6>$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6]; Получить сумму 4,5,6 элемента:</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

              echo getSumOfChosenArrElementsRange($arr, 3, 3);
            ?>
          </span>
          <em>(array_slice() + array_sum())</em>
        </div>
      </li>
      <li>
        <h6>Найти все элементы которые отсутствуют в первом массиве и присутствуют во втором:</h6>
        <pre>
          $firstArr = [
            'one' => 1,
            'two' => 2,
            'three' => 3,
            'foure' => 5,
            'five' => 12,
          ];

          $secondArr = [
            'one' => 1,
            'seven' => 22,
            'three' => 32,
            'foure' => 5,
            'five' => 13,
            'six' => 37,
          ];
        </pre>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $firstArr = [
                'one' => 1,
                'two' => 2,
                'three' => 3,
                'foure' => 5,
                'five' => 12,
              ];
      
              $secondArr = [
                'one' => 1,
                'seven' => 22,
                'three' => 32,
                'foure' => 5,
                'five' => 13,
                'six' => 37,
              ];

              echo findDiffInArrElements($secondArr, $firstArr);
            ?>
          </span>
          <em>(array_diff_key())</em>
        </div>
      </li>
      <li>
        <h6>Найти все элементы которые присутствую в первом и отсутствуют во втором:</h6>
        <pre>
          $firstArr = [
            'one' => 1,
            'two' => 2,
            'three' => 3,
            'foure' => 5,
            'five' => 12,
          ];

          $secondArr = [
            'one' => 1,
            'seven' => 22,
            'three' => 32,
            'foure' => 5,
            'five' => 13,
            'six' => 37,
          ];
        </pre>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $firstArr = [
                'one' => 1,
                'two' => 2,
                'three' => 3,
                'foure' => 5,
                'five' => 12,
              ];
      
              $secondArr = [
                'one' => 1,
                'seven' => 22,
                'three' => 32,
                'foure' => 5,
                'five' => 13,
                'six' => 37,
              ];

              echo findDiffInArrElements($firstArr, $secondArr);
            ?>
          </span>
          <em>(array_diff_key())</em>
        </div>
      </li>
      <li>
        <h6>Найти все элементы значения которых совпадают:</h6>
        <pre>
          $firstArr = [
            'one' => 1,
            'two' => 2,
            'three' => 3,
            'foure' => 5,
            'five' => 12,
          ];

          $secondArr = [
            'one' => 1,
            'seven' => 22,
            'three' => 32,
            'foure' => 5,
            'five' => 13,
            'six' => 37,
          ];
        </pre>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $firstArr = [
                'one' => 1,
                'two' => 2,
                'three' => 3,
                'foure' => 5,
                'five' => 12,
              ];
      
              $secondArr = [
                'one' => 1,
                'seven' => 22,
                'three' => 32,
                'foure' => 5,
                'five' => 13,
                'six' => 37,
              ];

              echo findDiffInArrElementsByValСoincidence($firstArr, $secondArr);
            ?>
          </span>
          <em>(array_intersect_assoc())</em>
        </div>
      </li>
      <li>
        <h6>Найти все элементы значения которых отличается:</h6>
        <pre>
          $firstArr = [
            'one' => 1,
            'two' => 2,
            'three' => 3,
            'foure' => 5,
            'five' => 12,
          ];

          $secondArr = [
            'one' => 1,
            'seven' => 22,
            'three' => 32,
            'foure' => 5,
            'five' => 13,
            'six' => 37,
          ];
        </pre>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $firstArr = [
                'one' => 1,
                'two' => 2,
                'three' => 3,
                'foure' => 5,
                'five' => 12,
              ];
      
              $secondArr = [
                'one' => 1,
                'seven' => 22,
                'three' => 32,
                'foure' => 5,
                'five' => 13,
                'six' => 37,
              ];

              echo findDiffInArrElementsByValAbsence($firstArr, $secondArr);
            ?>
          </span>
          <em>(array_diff_assoc())</em>
        </div>
      </li>
      <li>
        <h6>Получить все вторые элементы вложенных массивов:</h6>
        <pre>
          $firstArr = [
            'one' => 1,
            'two' => [
              'one' => 1,
              'seven' => 22,
              'three' => 32,
            ],
            'three' => [
              'one' => 1,
              'two' => 2,
            ],
            'foure' => 5,
            'five' => [
              'three' => 32,
              'foure' => 5,
              'five' => 12,
            ],  
          ];
        </pre>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $firstArr = [
                'one' => 1,
                'two' => [
                  'one' => 1,
                  'seven' => 22,
                  'three' => 32,
                ],
                'three' => [
                  'one' => 1,
                  'two' => 2,
                ],
                'foure' => 5,
                'five' => [
                  'three' => 32,
                  'foure' => 5,
                  'five' => 12,
                ],  
              ];

              echo getSecondNestedArrElements($firstArr);
            ?>
          </span>
          <em>(foreach(), is_array(), array_slice())</em>
        </div>
      </li>
      <li>
        <h6>Получить общее количество элементов в массиве:</h6>
        <pre>
          $firstArr = [
            'one' => 1,
            'two' => [
              'one' => 1,
              'seven' => 22,
              'three' => 32,
            ],
            'three' => [
              'one' => 1,
              'two' => 2,
            ],
            'foure' => 5,
            'five' => [
              'three' => 32,
              'foure' => 5,
              'five' => 12,
            ],  
          ];
        </pre>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $firstArr = [
                'one' => 1,
                'two' => [
                  'one' => 1,
                  'seven' => 22,
                  'three' => 32,
                ],
                'three' => [
                  'one' => 1,
                  'two' => 2,
                ],
                'foure' => 5,
                'five' => [
                  'three' => 32,
                  'foure' => 5,
                  'five' => 12,
                ],  
              ];

              echo getTotalAmountOfArrElements($firstArr);
            ?>
          </span>
          <em>(count($val, COUNT_RECURSIVE))</em>
        </div>
      </li>
      <li>
        <h6>Получить сумму всех значений в массиве:</h6>
        <pre>
          $firstArr = [
            'one' => 1,
            'two' => [
              'one' => 1,
              'seven' => 22,
              'three' => 32,
            ],
            'three' => [
              'one' => 1,
              'two' => 2,
            ],
            'foure' => 5,
            'five' => [
              'three' => 32,
              'foure' => 5,
              'five' => 12,
            ],  
          ];
        </pre>
        <div>
          <b>Result:</b>
          <span>
            <?php
              $firstArr = [
                'one' => 1,
                'two' => [
                  'one' => 1,
                  'seven' => 22,
                  'three' => 32,
                ],
                'three' => [
                  'one' => 1,
                  'two' => 2,
                ],
                'foure' => 5,
                'five' => [
                  'three' => 32,
                  'foure' => 5,
                  'five' => 12,
                ],
              ];

              echo getSumOfAllArrElementsVal($firstArr);
            ?>
          </span>
          <em>(foreach(), is_array(), recursive)</em>
        </div>
      </li>
    </ol>
      <?php
        //* 1: ==================================================

        function getArrLength($arr) {
          $length = count($arr);

          return $length;
        }

        //* 2: ==================================================

        function shiftChosenArrElementsToEnd($arr, $length) {
          $splice = array_splice($arr, 0, $length);

          array_push($arr, ...$splice);

          echo '<pre>';
          print_r($arr);
          echo '</pre>';
        }

        //* 3: ==================================================

        function getSumOfChosenArrElementsRange($arr, $offset, $length) {
          $slice = array_slice($arr, $offset, $length);
          $sum = array_sum($slice);

          return $sum;
        }

        //* 4, 5: ==================================================

        function findDiffInArrElements($a, $b) {
          $diff = array_diff_key($a, $b);

          echo '<pre>';
          print_r($diff);
          echo '</pre>';
        }

        //* 6: ==================================================

        function findDiffInArrElementsByValСoincidence($firstArr, $secondArr) {
          $diff = array_intersect_assoc($firstArr, $secondArr);

          echo '<pre>';
          print_r($diff);
          echo '</pre>';
        }

        //* 7: ==================================================

        function findDiffInArrElementsByValAbsence($firstArr, $secondArr) {
          $diff = array_diff_assoc($firstArr, $secondArr);

          echo '<pre>';
          print_r($diff);
          echo '</pre>';
        }

        //* 8: ==================================================

        function getSecondNestedArrElements($arr) {
          foreach ($arr as $key => $val) {
            if (is_array($val)) {
              $secondNestedArrElements = array_slice($val, 1, 1);

              echo '<pre>';
              print_r($secondNestedArrElements);
              echo '</pre>';
            }
          }
        }

        //* 8: ==================================================

        function getTotalAmountOfArrElements($arr) {
          return count($arr, COUNT_RECURSIVE);
        }

        //* 10: ==================================================

        function getSumOfAllArrElementsVal($arr) {
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
      ?> 
  </body>
</html>
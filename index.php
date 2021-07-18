<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hillel homeworks">
    <title>HW-1</title>
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
        margin-right: 4px;
        color: red;
      }
    </style>
  </head>
  <body>
    <ol>
      <li>
        <h6>Получить остаток деления 7 на 3:</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo getRemainderOfDivision(7, 3);
            ?>
          </span>
          <em>(%)</em>
        </div>
      </li>
      <li>
        <h6>Получить целую часть сложения 7 и 7,15:</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo getWholePartOfAddition(7, 7.15);
            ?>
          </span>
          <em>(round)</em>
        </div>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo getWholePartOfAddition2(7, 7.15);
            ?>
          </span>
          <em>(floor)</em>
        </div>
      </li>
      <li>
        <h6>Получить корень из 25:</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo getSqrtOfNum(25);
            ?>
          </span>
          <em>(sqrt)</em>
        </div>
      </li>
      <li>
        <h6>Получить 4-е слово из фразы - Десять негритят пошли купаться в море</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo getSubStrInPhrase(4, 'Десять негритят пошли купаться в море');
            ?>
          </span>
          <em>(explode)</em>
        </div>
      </li>
      <li>
        <h6>Получить 17-й символ из фразы - Десять негритят пошли купаться в море</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo getSymbolInStr('Десять негритят пошли купаться в море', 17);
            ?>
          </span>
          <em>(mb_substr)</em>
        </div>
      </li>
      <li>
        <h6>Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo capitalizeAllSubStr('Десять негритят пошли купаться в море');
            ?>
          </span>
          <em>(mb_convert_case)</em>
        </div>
      </li>
      <li>
        <h6>Посчитать длину строки - Десять негритят пошли купаться в море</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo getStrLength('Десять негритят пошли купаться в море');
            ?>
          </span>
          <em>(mb_strlen)</em>
        </div>
      </li>
      <li>
        <h6>Правильно ли утверждение true равно 1</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo checkIdentity(true, 1);
            ?>
          </span>
          <em>(==)</em>
        </div>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo checkStrictIdentity(true, 1);
            ?>
          </span>
          <em>(===)</em>
        </div>
      </li>
      <li>
        <h6>Правильно ли утверждение false тождественно 0</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo checkIdentity(false, 0);
            ?>
          </span>
          <em>(==)</em>
        </div>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo checkStrictIdentity(false, 0);
            ?>
          </span>
          <em>(===)</em>
        </div>
      </li>
      <li>
        <h6>Какая строка длиннее three - три</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo compareLength('three', 'три');
            ?>
          </span>
        </div>
      </li>
      <li>
        <h6>Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2</h6>
        <div>
          <b>Result:</b>
          <span>
            <?php
              echo getBiggerNum(125 * 13 + 7, 223 + 28 * 2);
            ?>
          </span>
        </div>
      </li>
    </ol>
      <?php
        //* 1: __________________________________________________
        
        function getRemainderOfDivision($dividend, $divider) {
          $res = $dividend % $divider;

          return $res;
        }

        //* 2: __________________________________________________

        function getWholePartOfAddition($firstTerm, $secondTerm) {
          $addition = $firstTerm + $secondTerm;
          $wholePart = round($addition, 0, PHP_ROUND_HALF_DOWN);

          return $wholePart;
        }

        function getWholePartOfAddition2($firstTerm, $secondTerm) {
          $addition = $firstTerm + $secondTerm;
          $wholePart = floor($addition);

          return $wholePart;
        }

        //* 3: __________________________________________________

        function getSqrtOfNum($num) {
          return sqrt($num);
        }

        //* 4: __________________________________________________

        function getSubStrInPhrase($pos, $str) {
          $subStrings = explode(' ', $str);
          $res =  $subStrings[$pos - 1];

          return  $res;
        }

        //* 5: __________________________________________________

        function getSymbolInStr($str, $pos) {
          $res = mb_substr($str, $pos - 1, 1);

          return  $res;
        }

        //* 6: __________________________________________________

        function capitalizeAllSubStr($str) {
          $res = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");

          return  $res;
        }

        //* 7: __________________________________________________

        function getStrLength($str) {
          $res = mb_strlen($str);

          return  $res;
        }

        //* 8: __________________________________________________

        function checkIdentity($firstComparable, $secondComparable) {
          if ($firstComparable == $secondComparable) {
            return "equal";
          } else {
            return "not equal";
          }
        }

        function checkStrictIdentity($firstComparable, $secondComparable) {
          if ($firstComparable === $secondComparable) {
            return "equal";
          } else {
            return "not equal";
          }
        }

        //* 9, 10: __________________________________________________

        function compareLength($firstComparable, $secondComparable) {
          $firstComparableLength = mb_strlen($firstComparable);
          $SecondComparableLength = mb_strlen($secondComparable);

          if ($firstComparableLength > $SecondComparableLength) {
            return $firstComparable . ' has bigger length than ' .  $secondComparable;
          } else {
            return $firstComparable . ' has smaller length than ' .  $secondComparable;
          }
        }

        //* 11: __________________________________________________

        function getBiggerNum($firstNum, $secondNum) {
          if ($firstNum > $secondNum) {
            return $firstNum . ' is bigger than ' .  $secondNum;
          } else {
            return $firstNum . ' is smaller than ' .  $secondNum;
          }
        }
      ?> 
  </body>
</html>
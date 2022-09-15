<?php
error_reporting(E_ALL); //вывод всех ошибок
// error_reporting(0); //отключение ошибок
?>
<!DOCTYPE html>
<html lang="ru">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= '00082-pet-PHP-repetition' ?></title>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <?php

  echo date('d.m.y H:i a') . "<br>";
  echo __DIR__ . "<br>"; // путь до директории
  echo __FILE__ . "<br>"; // путь до файла
  echo __LINE__ . "<br>"; // путь до строки в текущем файле
  echo PHP_VERSION, '<br>';
  $a = 5e5;
  $b = 5e-4;
  echo $a . "<br>";
  echo $b . "<br>";
  if (is_float(3.5)) echo "3.5 - число float" . "<br>";
  $numbers = [2, 3, 4, 5];
  echo $numbers[0] . "<br>";
  print_r($numbers);
  echo "<br>";
  // тип данных ресурс - resource - переменная содержащая ссылку на какой либо внешний ресурс
  $book = fopen('dir/noob.txt', 'r');
  var_dump($book);
  echo "<br>";
  $str1 = 'строка';
  $int1 = 42;
  $float1 = 42.42;
  $bool1 = true;
  $null1 = null;
  var_dump($str1);
  echo  "<br>";
  var_dump($float1);
  echo "<br>";
  var_dump($bool1);
  echo "<br>";
  var_dump($null1);
  echo "<br>";
  echo true xor true, "<br>";
  echo true xor false, "<br>";
  echo false || true, "<br>";
  echo false || false, "<br>";
  echo false && true, "<br>";
  echo true && true, "<br>";

  $name = 'phone';
  $price = 31333;
  // скидка на товар 20%
  // доставка товара 500р

  echo "товар: " . $name, "<br>";
  echo "цена товара: " . $price, "<br>";
  echo "цена товара со скидкой: " . ($price - $price * 0.2), "<br>";
  echo "Итого: цена товара со скидкой + доставка: " .  (($price - $price * 0.2) + 500), "<br>";


  ?>
  <script src="./script.js"></script>
</body>

</html>
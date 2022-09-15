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

  echo date('d.m.y H:i') . "<br>";
  echo __DIR__ . "<br>"; // путь до директории
  echo __FILE__ . "<br>"; // путь до файла
  echo __LINE__ . "<br>"; // путь до строки в текущем файле
  echo PHP_VERSION, '<br>';

  ?>
  <script src="./script.js"></script>
</body>

</html>
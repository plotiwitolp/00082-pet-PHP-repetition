<?php
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= '00082-pet-PHP-repetition'; ?></title>
</head>

<body>
    <?php
    // условия
    $isRed = true;
    $isGreen = true;
    $isBlue = false;

    if (isset($isRed)) :
        echo 'do', "<br>";
        unset($isRed);
    endif;
    echo (!empty($isRed) ? $isRed : 'no isRed <br>');
    // empty
    $_SESSION['user'] = 'John';
    $user = $_SESSION['user'] ?? 0;
    if (empty($user)) {
        echo 'Гость';
    } else {
        echo $user;
    }
    echo '<br>';

    //switch case
    $lang = $_GET['lang'] ?? "ru";

    switch ($lang) {
        case 'en':
            echo " Hello world ";
            break;
        case 'de':
            echo " Hallo Welt ";
            break;
        case 'ru':
        case 'русский':
            echo " Привет мир ";
            break;
        default:
            echo " Язык не поддерживается";
            break;
    }
    ?>
    <div>
        <a href="?lang=en">Английский</a>
        <a href="?lang=de">Немецкий</a>
        <a href="?lang=ru">Русский</a>
    </div>
    <table>
        <?php
        for ($h = 0; $h <= 5; $h++) {
        ?>
            <tr>
                <?php
                for ($i = 0; $i <= 5; $i++) {
                    if ($h == 0 || $i == 0) continue;
                ?>
                    <td style="width: 50px; height: 50px; border: 1px solid #777; text-align: center;">
                        <?= $i * $h . " "; ?>
                    </td>
            <?php
                }
            }
            ?>
            </tr>
    </table>

    <?php
    // сумма чисел от 1 до 100
    $total = 0;
    for ($i = 1; $i <= 100; $i++) :
        $total += $i;
    endfor;
    echo $total, "<br>";


    for ($i = 1; $i <= 9; $i++) {
        for ($h = 1; $h <= $i; $h++) {
            echo $i . ' ';
        }
        echo "<br>";
    }
    for ($i = 9; $i > 0; $i--) {
        for ($h = 1; $h <= $i; $h++) {
            echo $i . ' ';
        }
        echo "<br>";
    }

    //Array
    $month = [1 => 'январь', 'февраль', 'март', 'апрель', 'май'];
    $month['6'] = 'июнь';
    $month[] = 'июль';
    unset($month[count($month)]);
    echo '<pre>';
    print_r($month);
    echo '</pre>';
    echo $month['4'], "<br>";
    echo in_array("январь", $month) . "<br>";
    echo '<pre>';
    print_r(array_chunk($month, 2));
    echo '</pre>';
    echo '<br>';
    ?>
</body>

</html>
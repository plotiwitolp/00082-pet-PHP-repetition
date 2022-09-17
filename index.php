<?php
require_once './func.php';
$x = 500;
echo foo_fum();
define("LOGIN", "admin");
echo "<br>";
echo show_login();
echo "<br>";
count_up();
echo "<br>";
count_up();
echo "<br>";
count_up();
echo "<br>";
$average = function (array $arr) {
    return array_sum($arr) / count($arr);
};
echo "среднее значение: " . $average([1, 2, 5, 6, 7]), "<br>";
function factorial($a)
{
    if ($a === 0) return 1;
    return $a * factorial($a - 1);
}
echo factorial(170);

<?php
$arr = ['яблоки' => 10, 'бананы' => 15, 'груши' => 5, 'ананасы' => 2];
asort($arr);
foreach ($arr as $key => $value) {
    echo $key . " в колличестве: " . $value . '<br>';
}
echo '<br>';

$arr1 = range(1, 5);
$arr2 = range(1, 10, 2);

foreach ($arr1 as $v) {
    echo $v . " ";
}
echo '<br>';
foreach ($arr2 as $v) {
    echo $v . " ";
}
$arr3 = array_diff($arr2, $arr1);
$arr4 = array_diff($arr1, $arr2);
$arr5 = array_merge($arr3, $arr4);
sort($arr5);
echo '<pre>';
print_r($arr5);
echo '</pre>';
$str = "пн,вт,ср,чт,пт,сб,вс";
$arrStr = explode(",", $str);
echo '<pre>';
print_r($arrStr);
echo '</pre>';
$arrFromStr = implode('|', $arrStr);
echo $arrFromStr . "<br>";

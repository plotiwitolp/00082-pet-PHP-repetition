<?php
$arr = [
    ['name' => 'iphone', 'price' => 30000],
    ['name' => 'macbook', 'price' => 130000],
    ['name' => 'macpro', 'price' => 430000],
];
// увеличить стоимость товара на 30%
foreach ($arr as $val) {
    echo "цена $val[name] = " . ($val['price'] + ($val['price'] * 0.30)) . "<br>";
}
// создасть массив от 1 до 100, найти сумму чисел
$arr2 = range(1, 100);
$arr3 = array_sum($arr2);
echo $arr3 . "<br>";
// создать массив от a-z и соединить их в строку
$arr4 = range('a', 'z');
print_r($arr4);
echo "<br>";
echo implode(' ', $arr4);

<?php

echo '<a href="index.php">главная</a>';
echo "<h1>Вычисления и условный оператор в PHP</h1>";
echo "<h3>сортировка массивов</h3>";
echo "<p>сортировка выбором</p>";
$y = [1, 5, 4, 2, 2];
echo '<pre>';
print_r($y);
echo '</pre>';

for ($i = 0; $i < count($y) - 1; $i++) {
    $min = $i;
    for ($j = $i + 1; $j < count($y); $j++) {
        if ($y[$min] > $y[$j]) {
            $min = $j;
        }
    }
    if ($min != $i) {
        $buf = $y[$i];
        $y[$i] = $y[$min];
        $y[$min] = $buf;
    }
}
echo '<pre>';
print_r($y);
echo '</pre>';
echo "<p>сортировка пузырьком</p>";
$y = [1, 5, 4, 2, 2];
echo '<pre>';
print_r($y);
echo '</pre>';
for ($i = 0; $i < count($y); $i++) {
    for ($j = 1; $j < count($y) - 1; $j++) {
        if ($y[$j] > $y[$j + 1]) {
            $buf = $y[$j];
            $y[$j] = $y[$j + 1];
            $y[$j + 1] = $buf;
        }
    }
}
echo '<pre>';
print_r($y);
echo '</pre>';


echo "<h3>Простейшая арифметика</h3>";

//1
echo "<ol><li> Даны два числа. Найти их сумму и произведение.</li>";
echo '3 + 3 = ', 3 + 3, '<br>';
echo "3 * 3 = ", 3 * 3, "<br>";
//2
echo "<li>Даны два числа. Найдите сумму их квадратов.</li>";
$a = 3;
$b = 2;
$c = pow($a, 2) - 2 * $a * $b + pow($b, 2) + 2 * $a * $b;
echo "3<sup><small>2</small></sup> + 2<sup><small>2</small></sup> 
   = $c<br>";
//3























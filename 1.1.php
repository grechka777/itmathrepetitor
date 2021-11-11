<?php
echo '<a href="index.php">главная</a>';
echo "<h1>Вычисления и условный оператор в PHP</h1>";

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
   = $c";
//3

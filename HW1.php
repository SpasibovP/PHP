<?php
header("Content-Type: text/html; charset=utf-8");


//2
$login = "34443";
echo "Вы вошли под именем $login <br>";
unset ($login);



//3
$a = 3;
$b = 4;
$sum = ($a * $a) + ($b * $b);
echo "сумма квадратов: $sum <br>";

//4
$s = 60;
$t = 3;
$sp1 = $s/$t;
$sp2 = $sp1 *3.6;
echo "скорость в км/ч = $sp1 и в м/c $sp2 <br>";

//5

define("CONST_NAME", "555");
echo CONST_NAME;
const CONST_NAME = 333;
echo CONST_NAME;
echo "<br>";


//8


$n = 3.14;
echo round($n);
echo "<br>";

//9
$n = 456;
$a = $n % 10; //6
$b = ($n - $a) % 100 / 10; //5
$c = (integer) ($n / 100); //4

echo ($a + $b + $c);



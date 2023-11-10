<?php include 'includes/header.php';

$number1 = 20;
$number2 = 10;
$number3 = 10;
$number4 = "10";

// menor que
var_dump($number1 < $number2);
echo "<br>";

// mayor que
var_dump($number1 > $number2);
echo "<br>";

// menor o igual que
var_dump($number1 <= $number2);
echo "<br>";

// mayor o igual que
var_dump($number1 >= $number2);
echo "<br>";

// igual que
var_dump($number3 == $number4);
echo "<br>";

// igual que estricto
var_dump($number3 === $number4);
echo "<br>";

// si izquierda es menor, da -1
var_dump($number2 <=> $number1);
echo "<br>";

// si son iguales, da 0
var_dump($number2 <=> $number3);
echo "<br>";

// si derecha es menor, da 1
var_dump($number1 <=> $number2);
echo "<br>";

include 'includes/footer.php';

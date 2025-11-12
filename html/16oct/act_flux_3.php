<?php
// Fes un programa que et demani tres números i surti per pantalla el número més gran.

$num1 = 40;

$num2 = 6;

$num3 = 5;

$max = $num1; 

if ($num2 > $max) {
    $max = $num2;
}
if ($num3 > $max) {
    $max = $num3;
}


echo "El número més gran és: $max\n";
?>
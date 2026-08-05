<?php

$a = 1;
$b = -3;
$c = 2;

$delta = ($b * $b) - (4 * $a * $c);

$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);

echo " X1 = $x1 <br>";
echo "X2 = $x2"

?>
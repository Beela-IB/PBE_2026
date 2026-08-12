<?php

$numeros = [12,34,46,86,98,64,3,6,32]; 

$maior = -99999999;

foreach ($numeros as $numero){
    if ($numero > $maior){
        $maior = $numero;
    }
}
echo "Maior número:".$maior;
?>
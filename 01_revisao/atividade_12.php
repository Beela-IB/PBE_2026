<?php

$idades = [12,34,46,86,18,64,3,11,15]; 

$maior = 0;
$soma = 0;

foreach ($idades as $idade){
    $soma = $soma + $idade;
    if ($idade >= 18){
        $maior +=1;
    }
}
$total = count($idades);
 $media = $soma/$total;
echo "Média de idade:".$media;
echo "<br>";
echo "Maior de idade:".$maior;
?>
<?php
$idade1 = 15;
$idade2 = 18;
$idade3 =25;

function verificarMaioridade($idade){
    if($idade >= 18){
        return "Idade: $idade - Maior de idade<br>";
    }
    else{
       return "Idade: $idade - Menor de idade<br>" ;
    }
}
$resultado = verificarMaioridade($idade1);
echo $resultado;

$resultado2 = verificarMaioridade($idade2);
echo $resultado2;

$resultado3 = verificarMaioridade($idade3);
echo $resultado3;
?>
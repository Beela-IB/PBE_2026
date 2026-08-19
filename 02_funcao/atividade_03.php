<?php
function analisarNumero($numero){
    $dobro = $numero * 2;
    $triplo = $numero * 3;
    $quadrado = $numero **2;
        if($numero >= 0){
            $situacao = "Positivo";
        }
        else{
            $situacao = "Negativo";
        }
    return [
        "num" => $numero,
        "vezes 2" => $dobro,
        "vezes 3" => $triplo,
        "ao quadrado" => $quadrado,
        "situacao" => $situacao
    ];
}
    $resultado = analisarNumero(5);
    echo "Número:" . $resultado["num"] . "<br>";
    echo "Dobro:" . $resultado["vezes 2"] . "<br>";
    echo "Triplo:" . $resultado["vezes 3"] . "<br>";
    echo "Quadrado:" . $resultado["ao quadrado"] . "<br>";
    echo "Situação:" . $resultado["situacao"] . "<br>";
?>
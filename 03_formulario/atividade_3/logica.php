<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    echo "Primeiro Número: " . $numero1;
    echo "<br>";
    echo "Segundo Número: " . $numero2;
    echo "<br>";
    echo "Operação: " . $operacao;
    echo "<br>";

        if($operacao == "soma"){
            $soma = $numero1 + $numero2;
            echo "$numero1 + $numero2 = $soma";
        }
        elseif($operacao == "subtração"){
            $subtracao = $numero1 - $numero2;
            echo "$numero1 - $numero2 = $subtracao";
        }
        elseif($operacao == "multiplicação"){
            $multiplicacao = $numero1 * $numero2;
            echo "$numero1 * $numero2 = $multiplicacao";
        }
        elseif($operacao == "divisão" && $numero1 != 0 && $numero2 != 0){
            $divisao = $numero1 / $numero2;
            echo "$numero1 / $numero2 = $divisao";
        }

?>
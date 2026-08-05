<?php

function verificarEntrada($idade, $acompanhado) {
    if ($idade >= 18) {
        echo "Idade: $idade anos - Entrada liberada! <br>";
    } elseif ($idade >= 14 && $idade <= 17) {
        if ($acompanhado) {
            echo "Idade: $idade anos (Acompanhado) - Entrada liberada! <br>";
        } else {
            echo "Idade: $idade anos (Sem acompanhante) - Entrada proibida. Necessário acompanhante adulto. <br>";
        }
    } else {
        // Menores de 14 anos
        echo "Idade: $idade anos - Entrada proibida para menores de 14 anos (mesmo acompanhados). <br>";
    }
}

verificarEntrada(20, false);
verificarEntrada(16, true);  
verificarEntrada(15, false); 
verificarEntrada(12, true);

?>
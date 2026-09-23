<?php

$precos = [
    "Inteira" => 30,
    "Meia" => 15
];

function calcularTotal($tipo, $quantidade)
{
    global $precos;  //permitir que a função calcularTotal acesse e utilize a variável $precos

    return $precos[$tipo] * $quantidade;
}

function calcularDesconto($total, $pagamento)
{
    if ($pagamento == "Pix") {
        return $total * 0.10;
    } else {
        return 0;
    }
}

?>


<?php

function calcularPedido($nomeProduto, $precoUnitario, $quantidade, $descontoPercentual = 0, $impostoPercentual = 0) {
    $subtotal = $precoUnitario * $quantidade;
    $valorDesconto = $subtotal * ($descontoPercentual / 100);
    $valorImposto = ($subtotal - $valorDesconto) * ($impostoPercentual / 100);
    $totalFinal = ($subtotal - $valorDesconto) + $valorImposto;
    
    return [
        'nome_produto' => $nomeProduto,
        'subtotal' => $subtotal,
        'valor_desconto' => $valorDesconto,
        'valor_imposto' => $valorImposto,
        'total_final' => $totalFinal
    ];
}
?>
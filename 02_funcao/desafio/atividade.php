<?php
require_once 'funcao.php';

$resultado = calcularPedido('Teclado', 100.00, 2, 10, 5);

echo"Produto:".($resultado['nome_produto'])."<br>";
echo"Subtotal:".($resultado['subtotal'])."<br>";
echo"Desconto:".($resultado['valor_desconto'])."<br>";
echo"Imposto:".($resultado['valor_imposto'])."<br>";
echo"Total:".($resultado['total_final'])."<br>";
?>
<?php
require_once 'funcao.php';

$resultado = calcularPedido('Teclado', 20000.00, 2, 10, 5);
$frete = calculoFrete($resultado['total_final']);

echo"Produto:".($resultado['nome_produto'])."<br>";
echo"Subtotal:".($resultado['subtotal'])."<br>";
echo"Desconto:".($resultado['valor_desconto'])."<br>";
echo"Imposto:".($resultado['valor_imposto'])."<br>";
echo"Total:".($resultado['total_final'])."<br>";
echo"Total com frete:".($frete);
?>
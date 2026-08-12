<?php

$funcionarios = [
    ["nome" => "Carlos", "cargo" => "Progamador", "salario" => 500],
    ["nome" => "Ana", "cargo" => "Designer", "salario" => 3500],
    ["nome" => "Pedro", "cargo" => "Analista", "salario" => 3000],
    ["nome" => "Marina", "cargo" => "Gerente", "salario" => 1500],
    ["nome" => "João", "cargo" => "Suporte", "salario" => 1000],
    ["nome" => "Júlia", "cargo" => "Estagiária", "salario" => 2000]
];
$cadastros = 0;
$soma_total = 0;
foreach ($funcionarios as $funcionario){

    echo "Funcionário:". $funcionario["nome"] ." <br>";
    echo "Cargo:". $funcionario["cargo"] ." <br>";
    echo "Salário:". $funcionario["salario"] ." <br>";
    echo "------------------------------ <br>";
        $soma_total = $soma_total + $funcionario["salario"];
}
$cadastros = count($funcionarios);

echo "<br> Cadastros: $cadastros <br>";
echo "Soma dos salários: $soma_total";
?>
<?php

$alunos_notas = [
    "Ana" => 8.5,
    "Bruno" => 7.0, 
    "Carlos" => 9.2, 
    "Diana" => 6.8,
    "Eduardo" => 8.0,
    "Roberto" => 7.0
];

$media = 0;

foreach ($alunos_notas as $nome => $nota){
    echo "O aluno $nome tirou nota: $nota <br>";
    $media += $nota;
}

$media = $media/6;
echo "A média da sala é: $media";

?>
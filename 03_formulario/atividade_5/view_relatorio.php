<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <p><b>Nome: </b> <?= $nome ?> </p>
    <p><b>Peso: </b> <?= $peso ?> (kg) </p>
    <p><b>Altura: </b> <?= $altura ?> (m) </p>
    <p><b>Resultado IMC: </b> <?= $imc ?> </p>

    <?php if($imc < 18.5): ?>
        <h1>Abaixo do peso</h1>
    <?php elseif($imc >= 18.5 && $imc <= 24.9): ?>
        <h1>Peso normal</h1>
    <?php  elseif($imc >= 25 && $imc <= 29.9): ?>
        <h1>Sobrepeso</h1>
    <?php else: ?>
        <h1>Obesidade</h1>
    <?php endif ?>
</body>
</html>
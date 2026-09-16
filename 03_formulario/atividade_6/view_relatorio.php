<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1>Compre Ingressos</h1>
    <p><b>Nome: </b> <?= $nome ?> </p>
    <p><b>Filme: </b> <?= $filme ?> (kg) </p>
    <p><b>Quantidade: </b> <?= $qtd_ingresso ?> (m) </p>
    <p><b>Tipo ingresso: </b> <?= $tipo_ingresso ?> </p>
    <p><b>Valor total: </b> <?= $total ?> </p>

    <?php if($qtd_ingresso >= 10): ?>
        <h2>Parabéns, você ganhou um desconto de 10% !!</h2>
    <?php endif ?>
</body>
</html>
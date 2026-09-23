<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1>Relatório de Compras</h1>
    <p><b>Cliente: </b> <?= $nome ?> </p>

    <table border="1">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $produto['produto']?></td>
                    <td><?= $produto['preco']?></td>
                    <td><?= $produto['quantidade']?></td>
                    <td><?= $produto['subtotal']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <br>
    <p><b>Desconto</b> <?= $desconto ?></p>
    <?php if($desconto > 0): ?>
        <h2>Você recebeu um desconto</h2>
    <?php endif ?>

    <h2>Total da compra:<?= $total ?></h2>
</body>
</html>
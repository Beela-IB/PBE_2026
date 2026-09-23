<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1>Carrinho de Compras</h1>
        <label for="">Nome do Cliente:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
        <label for="">Produto 1:</label>
        <br>
        <input type="text" name="produto1" required >
        <br><br>
        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco1" required step="0.01">
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd1" required>
        <br><br>
        <label for="">Produto 2:</label>
        <br>
        <input type="text" name="produto2" required >
        <br><br>
        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco2" required step="0.01">
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd2" required step="0.01">
        <br><br>
        <label for="">Produto 3:</label>
        <br>
        <input type="text" name="produto3" required >
        <br><br>
        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco3" required step="0.01">
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd3" required step="0.01">
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <h1>Compra de Ingressos</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do Cliente:</label><br>
        <input type="text" name="nome" required><br><br>
        <label for="">Filme:</label><br>
        <input type="text" name="filme" required><br><br>
        <label for="">Quantidade de Ingressos:</label><br>
        <input type="number" name="qtd_ingresso" required step="0.01"><br><br>

        <p>Tipo de ingresso:</p>
    
        <label><input type="radio" name="tipo_ingresso" value="inteira">Inteira</label><br>
        <label><input type="radio" name="tipo_ingresso" value="meia" checked>Meia-entrada</label><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
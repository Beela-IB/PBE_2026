<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1>Calculadora</h1>
        <label for="">Primeiro Número:</label>
        <br>
        <input type="number" name="numero1">
        <br><br>
        <label for="">Segundo Número:</label>
        <br>
        <input type="number" name="numero2">
        <br><br>
        <label for="">Operação:</label>
        <br>
        <select name="operacao" required>
            <option value="soma">Soma(+)</option>
            <option value="subtração">Subtração(-)</option>
            <option value="multiplicação">Multiplicação(*)</option>
            <option value="divisão">Divisão(/)</option>
        </select>        
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
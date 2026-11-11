<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
</head>
<body>

    <h1>Boletim Escolar</h1>

    <p>Nome: <?php echo $aluno->getNome(); ?></p>

    <p>Turma: <?php echo $aluno->getTurma(); ?></p>

    <table border="1">

        <tr>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Média</th>
        </tr>

        <tr>
            <td><?php echo $aluno->getNota1(); ?></td>
            <td><?php echo $aluno->getNota2(); ?></td>
            <td><?php echo $aluno->getNota3(); ?></td>
            <td><?php echo number_format($aluno->calcularMedia(), 1, ',', '.'); ?></td>
        </tr>

    </table>

    <p>Faltas: <?php echo $aluno->getFaltas(); ?></p>

    <p>
        Frequência:
        <?php echo number_format($aluno->calcularFrequencia(), 1, ',', '.'); ?>%
    </p>

    <h2><?php echo $aluno->verificarSituacao(); ?></h2>

    <?php
    if ($aluno->verificarSituacao() == "Aprovado") {
        echo "Parabéns, continue assim!";
    }
    else {
        echo "Atenção: procure o professor para saber os próximos passos.";
    }
    ?>

</body>
</html>

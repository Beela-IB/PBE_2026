<?php
    $nome = $_POST['nome'];
    $produto1 = $_POST['produto1'];
    $preco1 = $_POST['preco1'];
    $qtd1 = $_POST['qtd1'];
    $produto2 = $_POST['produto2'];
    $preco2 = $_POST['preco2'];
    $qtd2 = $_POST['qtd2'];
    $produto3 = $_POST['produto3'];
    $preco3 = $_POST['preco3'];
    $qtd3 = $_POST['qtd3'];

        $produtos = [
            ["produto" => $produto1, "preco" => $preco1, "quantidade" => $qtd1, "subtotal" => $preco1 * $qtd1],
            ["produto" => $produto2, "preco" => $preco2, "quantidade" => $qtd2, "subtotal" => $preco2 * $qtd2],
            ["produto" => $produto3, "preco" => $preco3, "quantidade" => $qtd3, "subtotal" => $preco3 * $qtd3],
        ];
        
        $total = 0;

    foreach($produtos as $produto){
        $total = $produto['subtotal'] + $total;
    }
    $desconto = 0;
    if($total > 500){
        $desconto = 10;
    
        $valor_desconto = $total *($desconto/100);
        $total = $total - $valor_desconto;
    }

    require_once "view_relatorio.php";
?>
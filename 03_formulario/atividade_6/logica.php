<?php
$nome = $_POST['nome'];
$filme = $_POST['filme'];
$qtd_ingresso = $_POST['qtd_ingresso'];
$tipo_ingresso = $_POST['tipo_ingresso'];
$preco = 50;

    if($tipo_ingresso == 'meia'){
        $preco = $preco/2;
    }

    if($qtd_ingresso > 10){
        $desconto = $preco *10/100;
        $preco = $preco - $desconto;
    }

    $total = $preco * $qtd_ingresso;

require_once "view_relatorio.php";
?>
<?php

class Produto {
    
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
            echo "Venda de $quantidade unidades de $this->nome realizada com sucesso! <br><br>";
        } else {
            echo "Erro: Estoque insuficiente para realizar a venda de $quantidade $this->nome. <br><br>";
        }
    }

    public function reajustarPreco($percentual) {

        $this->preco += $this->preco * ($percentual / 100);
    }

    public function exibirInfo() {
        echo "--- Informações do Produto --- <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "Estoque restante: " . $this->estoque . " unidades <br>";
        echo "-----------------------------<br>";
    }
}

$produto = new Produto("Teclado Gamer", 250, 10);

$produto->vender(10);

$produto->reajustarPreco(10);

$produto->exibirInfo();

$produto2 = new Produto("Mouse", 100, 15);

$produto2->vender(10);

$produto2->reajustarPreco(5);

$produto2->exibirInfo();

?>

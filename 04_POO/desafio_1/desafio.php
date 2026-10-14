<?php

class Pedido {

    private $cliente;
    private $valorItens;

    public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->valorItens = 0;
    }

    public function adicionar_item($valor) {
        $this->valorItens += $valor;
    }

    public function getTotal(){
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Subtotal dos Itens: R$ " . number_format($this->valorItens, 2, ',', '.') . "<br>";
        echo "---------------------------------<br>";
    }

    public function gerar_notaFiscal($percentual_imposto) {
        $valorImposto = $this->valorItens * ($percentual_imposto / 100);
        $totalPagar = $this->valorItens + $valorImposto;

        echo "NOTA FISCAL: <br>";
        echo "Subtotal: R$ " . number_format($this->valorItens, 2, ',', '.') . "<br>";
        echo "Imposto Aplicado: " . $percentual_imposto . "%<br>";
        echo "Valor do Imposto: R$ " . number_format($valorImposto, 2, ',', '.') . "<br>";
        echo "Total a Pagar: R$ " . number_format($totalPagar, 2, ',', '.') . "<br>";
    }
}

class NotaFiscal {

    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0; 
    }
    public function calcularTotal() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        echo "NOTA FISCAL: <br>";
        echo "Subtotal: R$ " . number_format($this->totalPedido, 2, ',', '.') . "<br>";
        echo "Imposto Aplicado: " . $this->imposto . "%<br>";
        echo "Total a Pagar: R$ " . number_format($this->totalPagar, 2, ',', '.') . "<br>";
    }
}

$pedido = new Pedido("Leonardo");

$pedido->adicionar_item(80);

$pedido->exibirPedido();

$nota = new NotaFiscal($pedido->getTotal(), 8);

$nota->calcularTotal();

$nota->exibirNota();


?>
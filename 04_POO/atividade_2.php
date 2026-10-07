<?php

class ContaBancaria {

    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
    }

    function sacar($valor) {
        $this->saldo = $this->saldo - $valor;
    }

    function consultarSaldo() {
        echo "Saldo: R$ " . $this->saldo . "<br>";
    }
}

$conta = new ContaBancaria();

$conta->titular = "Isabela";
$conta->numero = 123;
$conta->saldo = 100;
$conta->tipo = "Corrente";

echo "Titular: " . $conta->titular . "<br>";
echo "Número: " . $conta->numero . "<br>";
echo "Saldo inicial: R$ " . $conta->saldo . "<br>";
echo "Tipo: " . $conta->tipo . "<br>";

$conta->depositar(50);
echo "Depois do depósito: R$ " . $conta->saldo . "<br>";

$conta->sacar(20);
echo "Depois do saque: R$ " . $conta->saldo . "<br><br>";

$conta->consultarSaldo();

$conta2 = new ContaBancaria();

$conta2->titular = "Leonardo";
$conta2->numero = 321;
$conta2->saldo = 50;
$conta2->tipo = "Corrente";

echo "Titular: " . $conta2->titular . "<br>";
echo "Número: " . $conta2->numero . "<br>";
echo "Saldo inicial: R$ " . $conta2->saldo . "<br>";
echo "Tipo: " . $conta2->tipo . "<br>";

$conta->depositar(20);
echo "Depois do depósito: R$ " . $conta2->saldo . "<br>";

$conta->sacar(50);
echo "Depois do saque: R$ " . $conta2->saldo . "<br>";

$conta->consultarSaldo();

?>
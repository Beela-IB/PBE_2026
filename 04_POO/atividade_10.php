<?php

class Carro {

    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {
        if ($litros > 0) {
            $this->tanque += $litros;
            // Formata para exibir o número de litros dinamicamente
            echo "Abastecidos " . $litros . " litro(s) no {$this->modelo}.<br>";
        } else {
            echo "Erro: O valor de abastecimento deve ser positivo.<br>";
        }
    }

    public function dirigir($km) {
        $combustivelNecessario = $km / $this->consumo;

        if ($this->tanque >= $combustivelNecessario) {
            $this->tanque -= $combustivelNecessario;

            $litrosConsumidosFormatado = number_format($combustivelNecessario, 2, ',', '');
            echo "O carro {$this->modelo} percorreu {$km} km e consumiu {$litrosConsumidosFormatado} litros.<br>";
        } else {
            echo "Não há combustível suficiente para percorrer a distância de {$km} km.<br>";
        }
    }

    // exibir as informações atuais do carro
    public function exibirInfo() {
        $tanqueFormatado = number_format($this->tanque, 2, ',', '');
        echo "Modelo: {$this->modelo} | Consumo: {$this->consumo} km/L | Tanque: {$tanqueFormatado} L<br>";
    }
}

$meuCarro = new Carro("Honda Civic", 12, 20.00);

$meuCarro->exibirInfo();

$meuCarro->dirigir(60);

$meuCarro->abastecer(10);

$meuCarro->exibirInfo();

?>

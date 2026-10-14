<?php
    class Carro{
        private $modelo;
        private $velocidade;

        public function __construct($modelo, $velocidade_padrao = 0){
            $this->modelo = $modelo;
            $this->velocidade = $velocidade_padrao;
        }

        public function acelerar(){

            $this->velocidade += 100;

        }
        public function frear(){

            $this->velocidade -= 10;

            if($this->velocidade < 0){
                $this->velocidade = 0;
            }

        }

        public function verVelocidade(){

            echo "Modelo: " . $this->modelo . "<br>";
            echo "Velocidade: " . $this->velocidade . " km/h<br>";

        }

    }

    $carro1 = new Carro("Toyota");

    $carro1->verVelocidade();

    echo "<br>";

    $carro1->acelerar();
    $carro1->verVelocidade();

    echo "<br>";

    $carro1->frear();
    $carro1->verVelocidade();

?>
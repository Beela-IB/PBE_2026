<?php
   
//o marcarComoAssistido()
//o exibirInformacoes()
//o foiAssistido() → retorna mensagem informando estado

    class Filmes{
        private $titulo;
        private $genero;
        private $duracao;
        private $assistido;

        public function __construct($titulo, $genero, $duracao, $assistido = false){
            $this->titulo = $titulo;
            $this->genero = $genero;
            $this->duracao = $duracao;
            $this->assistido = false;
        }

        public function marcarComoAssistido(){
            $this->assistido = true;
        }
        
        public function exibirInformacoes(){
            echo "Título: " . $this->titulo . "<br>";
            echo "Gênero: " . $this->genero . "<br>";
            echo "Duração: " . $this->duracao . "<br>";
        }
        public function foiAssistido(){
            if($this->assistido == true){
                echo "Assistido: Sim <br> Você já assistiu."; 
            }
            else{
               echo "Assistido: Não <br> Você ainda não assistiu.";
            }
        }
    }
    $filme1 = new Filmes("Matrix", "Ficção", "145 min");
    $filme1->exibirInformacoes();
    $filme1->foiAssistido();

    echo "<br>--------------------------------<br>";

    $filme2 = new Filmes("Harry Potter", "Ficção", "200 min");
    $filme2->marcarComoAssistido();
    $filme2->exibirInformacoes();
    $filme2->foiAssistido();
?>
<?php
    //Atributos privados: titulo, genero, duracao, assistido
//• Construtor recebe titulo, genero, duracao, e seta assistido como falso por padrão
//• Métodos públicos:
//o marcarComoAssistido()
//o exibirInformacoes()
//o foiAssistido() → retorna mensagem informando estado

    class Filmes(){
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

        public function marcarComoAssistido()
            if(this->assistido = false){
                echo
            }
    }

?>
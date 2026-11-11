<?php
    class Produto{
        private $nome;
        private $quantidade;
        private $preco;

        public function __construct($nome, $quantidade, $preco){
            $this->nome = $nome;
            $this->quantidade = $quantidade;
            $this->preco = $preco;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function calcularTotal(){
            return $this->preco * $this->quantidade;
        }

        public function calcularDesconto(){
            if($this->quantidade >= 10){
                $desconto = ($this->preco * $this->quantidade) * 0.10;
            }
            else{
                $desconto = 0;
            }
            return $desconto;
        }
        public function calcularTotalComDesconto(){
            $totalcomdesconto = $this->calcularTotal() - $this->calcularDesconto();
            return $totalcomdesconto;
        }
        public function verificarEstoque(){
            if($this->quantidade < 5){
                $estoque = "Estoque Baixo";
            }
            else{
                $estoque = "Estoque Alto";
            }
            return $estoque;
        }
    }
?>
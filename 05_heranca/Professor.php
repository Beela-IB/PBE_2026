<?php
    require_once "Pessoa.php";

        class Professor extends Pessoa{
            private $disciplina;

            public function __construct($nome, $email, $disciplina){
                $this->disciplina = $disciplina;
                // executa o construtor da classe Pessoa
                // passando os seus atributos
                parent::__construct($nome, $email);
            }

            // método para buscar a disciplina
            public function getDisciplina(){
                return $this->disciplina;
            }

            //exibir os dados do professor
            public function exibirDados(){
                parent::exibirDadosPessoa();
                echo "Disciplina $this->disciplina <br><hr>";
            }
        }
?>
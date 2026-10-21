<?php
    class Turmas{
       private $nome;
       private $professor;
       private $capacidade;
       private $qtdAlunos;
       
       public function __construct($nome, $professor, $capacidade, $qtdAlunos = 0){
            $this->nome = $nome;
            $this->professor = $professor;
            $this->capacidade = $capacidade;
            $this->qtdAlunos = $qtdAlunos;
       }
       public function adicionarAluno(){
            $this->qtdAluno += 1;
            if($this->qtdAluno > 32){
                echo "O número de alunos não pode ser maior que 32";
            }
       }
       public function removerAluno(){
            $this->qtdAluno -= 1;
            if($this->qtdAluno <= 0){
                echo "O número de alunos não pode ser menor que 0";
            }
       }
       public function exibirTurma(){
            echo "Turma: $this->nome <br>";
            echo "Professor: $this->professor <br>";
            echo "Alunos: $this->alunos/32 <br>";
       }
    }

    $turma1 = new Turmas("PHP OO", "Leonardo");
    $aluno1 = adicionarAluno(1);
    $turma1 = exibirTurma()
?>
<?php

class Aula {

    public $disciplina;
    public $professor;
    public $duracao;
    public $sala;
    public $bloco;

    function exibirInformacoes() {
    }

    function trocarProfessor($professor) {
        $this->professor = $professor;
    }

    function alterarLocal($n_sala, $bloco) {
        $this->sala = $n_sala;
        $this->bloco = $bloco;
    }
}

$aula = new Aula();

$aula->disciplina = "Matemática";
$aula->professor = "Carlos";
$aula->duracao = "2 horas";
$aula->sala = 5;
$aula->bloco = "A";

echo "Disciplina: " . $aula->disciplina . "<br>";
echo "Professor: " . $aula->professor . "<br>";
echo "Duração: " . $aula->duracao . "<br>";
echo "Sala: " . $aula->sala . "<br>";
echo "Bloco: " . $aula->bloco . "<br>";

$aula2 = new Aula();

$aula2->disciplina = "Português";
$aula2->professor = "Michele";
$aula2->duracao = "2 horas";
$aula2->sala = 8;
$aula2->bloco = "B";

echo "Disciplina: " . $aula2->disciplina . "<br>";
echo "Professor: " . $aula2->professor . "<br>";
echo "Duração: " . $aula2->duracao . "<br>";
echo "Sala: " . $aula2->sala . "<br>";
echo "Bloco: " . $aula2->bloco . "<br>";

?>
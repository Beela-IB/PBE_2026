<?php
    $nome = $_POST['nome_funcionario'];
    $salario_bruto = $_POST['salario_bruto'];
    $hora_extra = $_POST['horas_extras'];
    $beneficios = $_POST['beneficios'];
    $desconto = $_POST['descontos'];

        $valor_hora = $salario_bruto / $hora_extra;
        $valor_hora_extra = $valor_hora * 1.5;
        $total_horas_extras = $valor_hora * $valor_hora_extra;
        $salario_bruto_sem_descontos = $salario_bruto + $total_horas_extras + $beneficios;

    $imposto = 0;

            if($salario_bruto >= 5000){
                $imposto = $salario_bruto * 0.10;
            }
            else if($salario_bruto >= 3000 && $salario_bruto < 5000){
                $imposto = $salario_bruto * 0.05;
            }
            else{
                $imposto = $salario_bruto * 0;
            }

    $salario_liquido = ($salario_bruto + $total_horas_extras + $beneficios) - $desconto;

    echo "Nome: $nome <br>";

    echo "Salário Bruto: R$$salario_bruto <br>";

            $numero = $salario_bruto_sem_descontos;
                $formatado = number_format($numero, 2, ',', '.'); 

    echo "Salário Bruto + Total com horas Extras + Benefícios: R$$formatado <br>";

    echo "Descontos: R$$desconto <br>";

    echo "Imposto Aplicado: R$$imposto <br>";

                $numero2 = $salario_liquido;
                $formatado2 = number_format($numero, 2, ',', '.'); 

    echo "Salário Líquido: R$$formatado2 <br>";

            if($salario_liquido >= 4000){
                echo "Status: Bem Remunerado";
            }
            else{
                echo "Status: Médio";
            }
?>
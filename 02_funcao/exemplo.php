<?php
$frequencia1 = 75;
$nota1 = 10;
$frequencia2 = 80;
$nota2 = 10;
$frequencia3 = 85;
$nota3 = 10;

if($frequencia1 < 75){
    echo"Reprovado por falta, independente da nota.";
}
elseif($nota1 > 9){
    echo"Aprovado <br>";
}
elseif($nota1 >= 5 && $nota1 <= 6.9){
    echo"Recuperação <br>";
}
else{
    echo"Reprovado <br>";
}
    if($frequencia2 < 75){
        echo"Reprovado por falta, independente da nota. <br>";
}
    elseif($nota2 > 9){
        echo"Aprovado <br>";
    }
    elseif($nota2 >= 5 && $nota2 <= 6.9){
        echo"Recuperação <br>";
    }
    else{
        echo"Reprovado <br>";
    }
        if($frequencia3 < 75){
            echo"Reprovado por falta, independente da nota.<br>";
        }
        elseif($nota3 > 9){
            echo"Aprovado<br>";
        }
        elseif($nota3 >= 5 && $nota3 <= 6.9){
            echo"Recuperação<br>";
        }
        else{
            echo"Reprovado<br>";
        }
?>
<?php
$clientes = [
    "nome" => "Isabela",
     "cpf" => "253.698.753-15", 
     "telefone" => "19 465987315",
      "endereço" => "jardim, 123"
];

foreach( $clientes as $cliente){
    echo $cliente;
    echo "<br>";
}
?>
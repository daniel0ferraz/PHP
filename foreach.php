<?php
$aluno = array(
    "nome"=> "Daniel",
    "idade"=> 20,
    "estado"=> "ba",
    "pais" => "B0rasil"

);
// para cada item do array nome , pega o valor e lista na variavel aluno

foreach($aluno as $chave => $dado) {
    echo $chave. "=".$dado."</br>";
}
?>
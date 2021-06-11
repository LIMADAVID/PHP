<?php

$nome = "HCode";

$sobrenome = "Udemy";

//  Concatenação
$nomeCompleto = $nome . " " . $sobrenome;

//  Informações sobre uma variável
var_dump($nome);

//  Limpar variável
unset($nome);

//  Verifica se variável existe
if(isset($nome)){
    echo $nome;
}

//  array
$frutas = array("abacaxi", "laranja", "manga");

echo$frutas[2];

//  Objeto
$nascimento = new DateTime();
var_dump($nascimento);

//  resource
$arquivo = fopen("exemplo_01.php", "r");

var_dump($arquivo)

?>
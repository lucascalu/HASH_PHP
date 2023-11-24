<?php

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
// Valor de entrada
$valor_original = "a" ;

// Hash MD5 da string original
$hash_original = md5($valor_original);

// Valor a ser comparado (por exemplo, vindo de um formulário)
$valor_a_comparar = fread($myfile,filesize("newfile.txt"));

// Gerar o hash do valor a ser comparado
$hash_a_comparar = ($valor_a_comparar);

// Comparar os hashes
if ($hash_a_comparar === $hash_original) {
    echo "As senhas coincidem.";
} else {
    echo "As senhas não coincidem.";
}
?>

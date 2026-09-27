<?php

$nome = "Dalton";
$idade = 19;
$curso = "Tecnico de Gestão Programação Sistema de informação";

echo "Nome: " . $nome;
echo "Idade: " . $idade;
echo "Curso: " . $curso;

print_r($nome);
print_r($idade);
print_r($curso);


var_dump($nome);
var_dump($idade);
var_dump($curso);

function multiplicar(int $numero1, int $numero2)
{
    return $numero1 * $numero2;
}

$resultado = multiplicar("5", "4");

echo "Resultado da multiplicação: " . $resultado;
?>
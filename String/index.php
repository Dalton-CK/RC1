<?php 
    $nome = "Dalton";
    $curso = "Tecnico de Gestão Programação Sistema de informação";

    echo "O aluno $nome do curso de $curso";
    echo "O aluno " . $nome . " do curso de " . $curso;

    echo strtoupper($nome);
    echo strtolower($nome);
    echo strlen($nome);

    $novaFrase = str_replace("Dalton", "Pedro", $nome);
    echo $novaFrase;
?>
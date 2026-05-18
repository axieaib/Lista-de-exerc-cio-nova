<?php

    require_once "Aluno.php";

    $aluno1 = new Aluno();
    $aluno1->nome = "João Silva";
    $aluno1->matricula = "2023001";
    $aluno1->nota1 = 7.5;
    $aluno1->nota2 = 8.0;
            
    echo "<p>Aluno: {$aluno1->nome} | Matrícula: {$aluno1->matricula} | Nota 1: {$aluno1->nota1} | Nota 2: {$aluno1->nota2} | Média: " . $aluno1->calcularMedia() . "</p>";
            
?>

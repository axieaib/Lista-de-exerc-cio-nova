<?php

    require_once "Filme.php";

    $filme1 = new Filme();
    $filme1->titulo = "Devoradores de Estrelas";
    $filme1->genero = "Ficção científica, Drama, Aventura";
    $filme1->duracaoMinutos = 156;
    $filme1->notaAvaliacao = "8.3";

    echo "<p> " . $filme1->exibir() . " </p>";
            
?>
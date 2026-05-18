<?php

    require_once "Retangulo.php";

    $retangulo1 = new Retangulo();
    $retangulo1->largura = 7.5;
    $retangulo1->altura = 4;

echo "<p>Retângulo: {$retangulo1->largura} cm x {$retangulo1->altura} cm | Área: " . $retangulo1->calcularArea() . " | Perímetro: " . $retangulo1->calcularPerimetro() . " </p>";
            
?>

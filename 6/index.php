<?php

    require_once "Circulo.php";

    $circulo1 = new Circulo();
    $circulo1->raio = 9;

    echo "<p>Círculo: Raio = {$circulo1->raio} cm | Área = " . $circulo1->calcularArea() . " cm | Circunferência = " . $circulo1->calcularCircunferencia() . " cm</p>";
            
?>
<?php

    require_once "Temperatura.php";

    $temp1 = new Temperatura();
    $temp1->celsius = 40;

    echo "<p>TEMPERATURA: Celsius = {$temp1->celsius}°C  | Fahreinheit = " . $temp1->paraFahrenheit() . "°F | Kelvin = " . $temp1->paraKelvin() . "K</p>";
            
?>
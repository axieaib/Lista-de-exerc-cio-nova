<?php

class Temperatura{
    public float $celsius;

    public function paraFahrenheit(){
        return ($this->celsius * 9/5) + 32;
    }

    public function paraKelvin(){
        return ($this->celsius + 273.15);
    }
}

?>
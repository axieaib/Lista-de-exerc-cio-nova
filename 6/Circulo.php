<?php

class Circulo{
    public float $raio;

    public function calcularArea(){
        return 3.14 * ($this->raio * $this->raio);
    }

    public function calcularCircunferencia(){
        return (2 * 3.14 * $this->raio);
    }
}

?>
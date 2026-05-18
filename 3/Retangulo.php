<?php

class Retangulo{
    public float $largura;
    public float $altura;

    public function calcularArea(){
        return ($this->altura * $this->largura);
    }

    public function calcularPerimetro(){
        return ($this->largura + $this->altura) * 2;
    }

}

?>

<?php 

class Aluno{
    public $nome;
    public $matricula;
    public $nota1;
    public $nota2;

    public function calcularMedia(){ 
        return ($this->nota1 + $this->nota2) / 2; 
    }

}

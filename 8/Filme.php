<?php

class Filme{
    public string $titulo;
    public string $genero;
    public int $duracaoMinutos;
    public float $notaAvaliacao;

    public function exibir(){
        return "Titulo: {$this->titulo} | Gênero(s): {$this->genero} | Duração: {$this->duracaoMinutos} min | Nota: {$this->notaAvaliacao}/10";
    }
}

?>
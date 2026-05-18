<?php

class Livro{
    public $titulo;
    public $autor;
    public $numeroPaginas;
    public $preco;

    public function print() {
        return "{$this->titulo}, de {$this->autor} | {$this->numeroPaginas} páginas | R$ {$this->preco} ";
    }
}

?>

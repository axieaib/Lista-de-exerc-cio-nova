

<?php

    require_once "Livro.php"; // indica a classe pro arquivo puxar

            
    $livro1 = new Livro();
    $livro1->titulo = "O Espreitador e Outros Contos";
    $livro1->autor = "Daniel Hartmann";
    $livro1->numeroPaginas = 352;
    $livro1->preco = 70.00;
            

    echo "<p> {$livro1->titulo}, de {$livro1->autor} | {$livro1->numeroPaginas} páginas | R$ {$livro1->preco} </p>";

?>
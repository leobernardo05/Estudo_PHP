<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
            $texto = 'Curso completo de PHP';
            // strtolower($texto) --> Todas as letras em minusculas
            echo strtolower($texto) . '<br>';
            // strtoupper($texto) --> Todas as letras em maiusculo
            echo strtoupper($texto) . '<br>';
            // ucfirst($texto) --> Transforma o primeiro caracter em string maiúscula
            echo ucfirst($texto) . '<br>';
            // strlen($texto) --> Conta a quantidade de caracteres 
            echo strlen($texto) . '<br>';
            // str_replace(<procura por>, <substitui por>, $texto) --> Substitui uma cadeia de caracteres por outra dentro da string
            echo str_replace('Curso', 'Aulas', $texto) . '<br>'; //--> substitui Curso por Aulas
            // substr($texto, <posicao inicial>,<qtde caracteres>) --> retorna parte de uma string
            echo substr($texto, 1, 13) . '<br>';
    ?> 
</body>
</html>
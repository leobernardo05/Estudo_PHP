<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        //gettype() => retorna o tipo da variável
        $valor = 10.55; // interger - inteiro
        // castins de int para flaot
        // $valor2 = (float)$valor;

        // casting de float para int
        $valor2 = (int)$valor; 

        echo gettype($valor);
        echo '<br>';
        echo gettype($valor2);
    ?> 
</body>
</html>
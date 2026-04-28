<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        $numero = 10.5;
        //-------- Funções nativas para tarefas matemáticas ----------
        // ceil($numero) -> Arredonda o valor para cima
        echo ceil($numero) . '<br>';
        // floor($numero) -> Arredonda o valor para baixo
        echo floor($numero) . '<br>';
        // round($numero) -> Arredonda o valor com base nas casas decimais
        echo round($numero) . '<br>';
        // rand() -> gera um inteiro aleatorio
        echo rand() . '<br>';
        // sqrt($numero) -> retorna a raiz quadrada
        echo sqrt($numero) . '<br>';
    ?> 
</body>
</html>
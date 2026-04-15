<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
       $nota = 10; //lembra do ';'

        // <> operador diferente no PHP, unica diferença do JS.   
        // operador XOR --> Verdadeiro apenas se uma das expressões forem verdadeiras, mas não ambas 
       if ($nota <= 7 && $nota >= 0) {
            echo 'Aluno reprovado';
       } else {
            echo 'Aluno aprovado';
       }

        //operadores logico
        // E: && ou AND
        // OU: || ou OR
        // XOR: XOR -> retonra verdadeiro se uma das expressões for verdadeira retorna false
        if(7 >= 4 XOR 10< 15) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
    ?> 
</body>
</html>
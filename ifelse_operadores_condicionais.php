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
       if ($nota <= 7 && $nota >= 0) {
            echo 'Aluno reprovado';
       } else {
            echo 'Aluno aprovado';
       }
    ?> 
</body>
</html>
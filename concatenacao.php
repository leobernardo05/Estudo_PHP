<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        $nome = 'Léo';
        $idade = '19';
        $hobbie = 'futebol';
        // operador .
       echo 'Olá ' . $nome . ', você tem ' . $idade . ' anos e gosta de ' . $hobbie . '.';
    
       echo'<br>';
        // aspas duplas
       echo "Olá $nome, você tem $idade anos e gosta de $hobbie"; // "" server como `` no js --> bem melhor!!!   
    ?> 
</body>
</html>
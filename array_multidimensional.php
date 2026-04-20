<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        // $lista_coisas = array();
        $lista_coisas = [];

        $lista_coisas['frutas'] = array('Banana', 'Maça', 'Morango', 'Uva'); //array bidimensional -> em listas coisas está contido as frutas
        $lista_coisas['pessoas'] = ['João', 'José', 'Maria'];

        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre>';

        echo '<hr>';
        echo $lista_coisas['frutas'][3];
        echo '<br>';
        echo $lista_coisas['pessoas'][2];
    ?> 
</body>
</html>
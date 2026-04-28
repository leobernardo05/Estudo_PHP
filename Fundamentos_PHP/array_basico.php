<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        //sequenciais (númericos)
        $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
        $lista_frutas[] = 'Abacaxi';
        $lista_frutas = ['Abacaxi', 'limão', 'pera'];

        echo '<pre>';
            var_dump($lista_frutas);
        echo '<hr />';
            print_r($lista_frutas);
        echo '<pre>';

        // associativos
        echo '<hr />';

        $lista_coisas = array(
        'a' => 'Bola', 
        'b' => 'Celular', 
        'x' => 'Copo', 
        '2' => 'Relogio', 
        'z' => 'Detergente');

        echo '<pre>';
        var_dump($lista_coisas);
        echo '<pre>';
        
        $lista_coisas['w'] = '';
        echo $lista_coisas['2'];
    ?> 
</body>
</html>
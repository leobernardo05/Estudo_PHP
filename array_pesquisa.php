<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        // in_array()
        // array_search() ---> retorna o índice do valor pesquisado, caso ele exista 
        $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        $existe = in_array('Abacate', $lista_frutas);
        // true -> texto = 1
        // false -> texto = vazio
        echo array_search('Uva', $lista_frutas);
        // null
        
        
        if($existe != null){ //true / false
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado existe no array';
        }
        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        echo in_array('Melancia', $lista_coisas['frutas']);
    ?> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        // ----------------- is_array --------------
        /*$array = array('notebook', 'teclado'); // -> verifica se o parametro é um array
        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }*/


       /* 
        // ------------- keys ------------- 
       $array = [1 => 'a', 7 => 'b', 18 => 'c'];
       echo '<pre>';
            print_r($array);
        echo '</pre>';

        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>'
        */

        /*
        // -------------- sort ------------ 
        $array = array('mouse', 'HDMI', 'notebook', 'mousepad', 'teclado');
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        sort($array); // true or false --> asort(faz o contrario)
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        */
        /*
        // ---------- count array -------- 
        $array = array('mouse', 'HDMI', 'notebook', 'mousepad', 'teclado', 'monitor');
        echo '<pre>';
            print_r($array);
            echo count($array);
        echo '</pre>';*/

        /*
        // ------------ array_merge ----------
        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';*/

        // ----- explode -----------
        /*$string = '26/04/2026';
        $array_retorno = explode('/', $string);     
        echo '<pre>';
            print_r($array_retorno);
        echo '</pre>';*/

        // ------------ implode (array) --------- junta elemento de um array em uma string
        $array = ['a', 'b', 'x', 'z']; // a,b,x,y
        $string_retorno = implode(',', $array);
        echo $string_retorno; //--> virou string

    ?> 
</body>
</html>
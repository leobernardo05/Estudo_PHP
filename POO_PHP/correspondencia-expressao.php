<?php
    $busca = '2';

    switch($busca){ //comparação por igualdade/equalidade
        case '1':
                $retornoSwitch = 'Encontrou';
                break;
        case '2':
                $retornoSwitch = 'Encontrou'
                break;
        default:
                $retornoSwitch = 'NÃO encontrou';
    }

    echo 'Resultado switch: '.$retornoSwitch;
    echo '<hr>';
?>
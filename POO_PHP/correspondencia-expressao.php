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
    
    $retorno = match ($busca) {
        '1' => 'Enconstrou o texto 1',
        1 => 'Encontrou o number one',
        default => 'Não encontrou'
    }; // -> muito legal essa nova atualização do PHP 8+

    echo "Resultado match: ".$retorno;

?>
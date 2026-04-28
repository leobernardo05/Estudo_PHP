<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        // false (true/false) - tipo variavel boolean
        // null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        // valores vazios
        if (is_null($funcionario2)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Não, a variavel não é util';
        }

        echo '<br>';
        // valores nulls
        if (is_null($funcionario1)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Não, a variavel não é util';
        }

        echo '<br>';

        if(is_null($funcionario3)){
            echo 'Sim, a variavel é null';
        } else {
            echo 'Não, a variavel não é util';
        }
        
    ?> 
</body>
</html>
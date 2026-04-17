<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        //incremento pos
        $a = 7;

        echo "O contido em a é: $a <br>";
        echo 'O contido em a é: ' . $a++ . '<br>'; //precisa concatenar para o interpetador não assumir como uma string
        echo "O valor atualizado é $a <br><br>";
        
        //incremento pre
        echo "O contido em a é: $a <br>";
        echo 'O contido em a é: ' . ++$a . '<br>'; //incrementa antes
        echo "O valor atualizado é $a <br><br>";

        // decremento pos
        echo "O contido em a é: $a <br>";
        echo 'O contido em a é: ' . $a-- . '<br>'; //precisa concatenar para o interpetador não assumir como uma string
        echo "O valor atualizado é $a <br><br>";
        
        //decremento pre
        echo "O contido em a é: $a <br>";
        echo 'O contido em a é: ' . --$a . '<br>'; //incrementa antes
        echo "O valor atualizado é $a";
    ?> 
</body>
</html>
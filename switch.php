<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        $opcao = 2;

        switch(opcao) {
            case 1: 
                echo 'opcao 1';
                break;
            case 2: 
                echo 'opcao 2';
                break;
            case 3: 
                echo 'opcao 3';
                break;
            default:
                echo 'coloque uma opcao valida';
                break;
        }
    ?> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        //função de boas vindas 
        function exibirBoasVindas() {
            echo 'Seja bem vindo ao curso de PHP <br>';
        }
        exibirBoasVindas();


        // função calcular terreno
        function calcularAreaTerreno($largura, $altura) {
            $area = $largura * $altura;
            return $area;
        }
        $resultado = calcularAreaTerreno(10,20);
        echo "A area é: $resultado"

    ?> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
       $array = ['1','2','3','4','3','2', '1'];
        $i = 0;
        //while = enquanto
        while ( $i < count($array) ) {
            echo $array[$i] . "<br>";
            $i++;
        }
        
        // laço do-while --> faça-equanto
        $i = 0;

        do {
            echo $array[$i] . "<br>";
            $i++;
        } while ( $i < count($array));

        // laço for -> mais usado
        for($j = 0; $j < count($array); $j++){
            echo $array[$j] . "<br>";
        }

        // forech -- laço de repetição
        $itens = array('sofa', 'mesa', 'cadeira', 'fogao', 'geladeira');
        echo '<pre>';
            print_r($itens);
        echo '</pre>';

        foreach($itens as $item) {
            echo "$item <br/>";

            if($item == 'mesa') {
                echo '(Compre uma mesa e ganhe 25% de desconto em uma geladeira)';
            }
        }

    ?> 
</body>
</html>
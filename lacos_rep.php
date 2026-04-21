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
        while ( $i <= count($array) ) {
            echo $array[$i] . "<br>";
            $i++;
        }
        
        // laço do-while --> faça-equanto
        $i = 0;

        do {
            echo $array[$i] . "<br>";
            $i++;
        } while ( $i <= $array.count())

        // laço for -> mais usado
        for($j = 0; $j <= $array.count(); j++){
            echo $array[$j] . "<br>";
        }
    ?> 
</body>
</html>
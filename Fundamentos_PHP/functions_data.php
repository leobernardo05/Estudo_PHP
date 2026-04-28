<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
        // date(formato) -> Recuperar a data atual
        echo date('d/m/y H:i:s'); // -> visualizar documentação PHP
        // date_default_timezone_get(timezone) -> Recuperar o timezone default da aplicação
        echo '<br />';
        echo date_default_timezone_get();
        // date_default_timezone_set(timezone) -> Atualizar o timezone default da aplicação
        date_default_timezone_set('America/Sao_Paulo');
        echo '<br />';
        echo date('d/m/Y H:i');
        echo '<br />';

        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';
        // strtotime(data) -> Transformar datas textuais em segundas
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br />';
        echo $data_final . ' - ' . $time_final;     

    ?> 
</body>
</html>
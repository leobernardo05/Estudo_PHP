<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
</head>
<body>
    <?php
      $funcionarios = array(
        array('nome' => 'João', 'salario' => 2500), 
        array('nome' => 'Maria', 'salrio' => 3000), 
        array('nome' => 'Júlia', 'salario' => 4500)
      );

      echo '<pre>';
        print_r($funcionarios);
      echo '</pre>';

      foreach($funcionarios as $idx => $nome_funcionario) {
        echo $nome_funcionario . '<br>';
      }
    ?> 
</body>
</html>
<?php
    // tenha uma lógica
    try { //tente
        // tenha um lógic onde possa ocrrer um potencial erro(exceção)
        echo '<h3> *** Try *** </h3>';
        $sql = 'Select * from clientes';
        mysql_query($sql); //Erro

        if(!file_exists('requere_arquivo_a.php')){
            // retorna verdadeiro
            // throw new Exception();
            throw new Error('Erroooooo')
        }

    } catch (Error $e){ //pegar
        echo '<h3> *** Catch *** </h3>';
        echo '<p style=calor: red;>' . $e . '</p'>
        // armazenando esse erro em banco de dados
    } finally { //finalmente
        echo '<h3> *** Finally *** </h3>';
    }

    // tenha uma logica
?>
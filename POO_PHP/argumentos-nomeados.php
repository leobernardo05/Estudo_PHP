<?php
    function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
        echo "Destinatarios: ".$destinatarios."<br>";
        echo "CC: ".$cc."<br>";
        echo "Assunto: ".$assunto."<br>";
        echo "Mensagem: ".$mensagem."<br>";
    }

    // convencional -> respeitando a ordem dos parametros
    sendEmail (
        assunto: 'lbm3@discente.ifpe.edu.br'; //destinataria
        destinatario: 'teste@teste.com.br'; //copia
        mensagem: 'Argumentos Nomeados'; //assunto
    );

    echo '<hr>';

    sendEmail (
        'lbm3@discente.ifpe.edu.br'; //destinataria
        'teste@teste.com.br'; //copia
        'Argumentos Nomeados'; //assunto
        'Dominando a feature de argumentos'; //mensagem
    );
?>
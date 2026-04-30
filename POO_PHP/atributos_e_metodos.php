<?php
    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1(){
            echo 'Eu sou um método estático';
        }

        public function metodo2(){
            echo 'Eu sou um método normal';
        }
    }

    //$x = new Exemplo(); // não é necessario para metodos e atributos estaticos
    echo Exemplo::$atributo1;
    echo '<br>';
    echo Exemplo::metodo1();

    //echo Exemplo::metodo2(); //erro, pois não é metodo estatico
?>
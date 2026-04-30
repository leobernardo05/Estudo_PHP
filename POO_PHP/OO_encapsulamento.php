<?php
    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }
    }


    $pai = new Pai();
    // echo $pai->humor;
    echo $pai->sobrenome;
    echo $pai->sobrenome = 'Oliveira';
    echo '<br>'
    /*$pai->humor = 'Triste';
    echo '<br>';
    echo $pai->humor;*/
?>
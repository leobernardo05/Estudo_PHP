<?php
    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function getNome(){
            return $this->nome;
        }

        public function setNome($value){
            $this->nome = $value;
        }
    }


    $pai = new Pai();
    echo $pai->getNome();
    $pai->setNome('Leo');
    echo '<br>';
    echo $pai

    /*$pai->humor = 'Triste';
    echo '<br>';
    echo $pai->humor;*/
?>
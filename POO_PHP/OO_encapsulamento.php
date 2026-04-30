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

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            $x = rand(1,10);  
            
            if($x >= 1 && $x <= 8) {
                $this->executarMania();
            } else {
                $this->responder();
            }
        }
    }

    class Filho extends Pai {
        public function getAtributo($attr){
            return $this->$attr;
        }

        public function setAtributo($attr, $value){
            $this->$attr = value;
        }
    }


    /*$pai = new Pai();
    // echo $pai->humor;
    echo $pai->sobrenome;
    echo '<br>';
    echo $pai->sobrenome = 'Oliveira';
    echo '<br>';
    echo $pai->executarAcao();
    $pai->humor = 'Triste';
    echo '<br>';
    echo $pai->humor;*/

    $filho = new Filho();
    echo '<pre>';
        print_r($filho);
    echo '</ pre>';
    echo $filho->getAtributo('sobrenome');
    $filho->setAtributo('humor', 'Triste');
    echo '</ br>';
    echo $filho->getAtributo('humor');
?>
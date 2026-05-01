<?php
    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    // -----------------------------

    class Geladeira implements EquipamentoEletronicoInterface { //"obriga" colocar os metodos!
        public function abrirPorta (){
            echo 'Abrir a porta';
        }

        public function ligar() {
            echo 'ligar';
        }

        public function desligar() {
            echo 'desligar';
        }

    }

    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal(){
            echo 'Trocar canal';
        }

        public function ligar() {
            echo 'ligar';
        }

        public function desligar() {
            echo 'desligar';
        }
    }

    $x = new Geladeira();
    $y = new TV();

    // --------------------------
    interface MamiferoInterface {
        public function respirar();
    } 

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    // interface cachorro
    class Cachorro implements TerrestreInterface, MamiferoInterface {
        public function andar(){
            echo 'andando';
        }    

        public function respirar(){
            echo 'respirando';
        }
    }

    // interface baleia
    class Baleia implements AquaticoInterface, MamiferoInterface {
        public function respirar(){
            echo 'respirando';
        }

        public function nadar(){
            echo 'nadando';
        }

        protected function esguichar (){
            echo 'esguichar';
        }
    }
    // interface ornitorrinco que faz tudo, ou seja, implementa as 3 interfaces
    class Ornitorrinco implements TerrestreInterface, AquaticoInterface, MamiferoInterface {
        public function respirar(){
            echo 'respirando';
        }

        public function andar(){
            echo 'andando';
        }

        public function nadar(){
            echo 'nadando';
        }
    }
?>
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
?>
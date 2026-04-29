<?php
    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }

        function frear() {
            echo 'freando';
        }

        function trocarMarcha(){
            echo 'Desengatar embreagem com o pé e engatar marcha'
        }
    }

    class Carro extends Veiculo { //pilar da herança aqui
        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar () {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo { //pilar da herança aqui
        public $contraPesoGuiado = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'empinar';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('ABC1E22', 'Preta');

?>
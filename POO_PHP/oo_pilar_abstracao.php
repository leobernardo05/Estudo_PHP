<?php
    // modelo
    class Funcionario {
        // atributos
        public $nome = 'José';
        public $telefone = 8799999999;
        public $numFilhos = 2;

        // métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos () {
            // afetar o atributo do objeto
        }
    }

    $funcionario = new Funcionario();
    $funcionario-> resumirCadFunc();

    $funcionario->modificarNumFilhos();
?>
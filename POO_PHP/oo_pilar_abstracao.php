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

        function modificarNumFilhos ($numFilhos) {
            // afetar o atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $funcionario = new Funcionario();
    echo $funcionario-> resumirCadFunc();
    echo '<br>';
    echo $funcionario->modificarNumFilhos(3);
    echo $funcionario-> resumirCadFunc();
?>
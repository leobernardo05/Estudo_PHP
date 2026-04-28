<?php
    // modelo
    class Funcionario {
        // atributos
        public $nome = 'José';
        public $telefone = 8799999999;
        public $numFilhos = 2;

        // getters setters
        function setNome($nome) {
            $this->nome = $nome; //set apenas manipula
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome($nome) {
            return $this->nome //get ler = função void, retorna algo
        }

        function getNumFilhos($numFilhos) {
            return $this->numFilhos
        }

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
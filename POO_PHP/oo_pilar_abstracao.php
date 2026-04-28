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

        function getNome() {
            return $this->nome; //get ler = função void, retorna algo e não recebe parametro
        }

        function getNumFilhos() {
            return $this->numFilhos;
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

    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos (2);
    // echo $y-> resumirCadFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . 'filhos(s)'
?>
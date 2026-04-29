<?php
    // modelo
    class Funcionario {
        // atributos
        public $nome = 'José';
        public $telefone = 8799999999;
        public $numFilhos = 2;
        public $cargo = null;
        public $salario = null;

        // getters setters(overloading / sobrecarga) -> metodo magico
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this-> $atributo;
        }


        /*
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
        }*/
    }

    $y = new Funcionario();
    $y->__set('nome', 'Zacarias');
    $y->__set('numFilhos', 5);
    // $y->setNumFilhos (2);
    // echo $y-> resumirCadFunc();
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos(s)'
?>
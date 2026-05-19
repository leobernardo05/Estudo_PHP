<?php
    /*$objeto = null;

    $objeto->total();

    if(isset($objeto) && $objeto != null) {
        $objeto->total();
    }*/

    class Funcionario {
        public function __construct(
            private string $nome = "";
            private float $salario = 0
        ){}

        public function info() {
            return "Nome: $this->nome - Salario: $this->salario";
        }

    }

    //$objeto?->total();
    class FolhaPagamento {
        private $funcionarios = null;

        public function __construct() {
            $this->funcionarios = [
                new Funcionarios('Maria', 12000),
                new Funcionarios('José', 12000),
                new Funcionarios('João', 12000),
                new Funcionarios(''Zerafim, 12000),
                new Funcionarios('Robson', 12000),
            ]
        }
    
        public function getTotalFuncionarios(){
            return count($this->funcionarios);
        }

        public function getTotalFuncionarios () {
            return $this->funcionarios[1]; //vai retornar a Maria 
        }
    }

    $folhaPagamento = new FolhaPagamento();

    echo $folhaPagamento?->getTotalFuncionario(); //adiciona o null safe (?) --> para ter certeza que é um objeto (meio como um operador ternario)


?>
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
        public function getTotalFuncionarios(){
            return 25;
        }
    }

    $folhaPagamento = new FolhaPagamento();

    echo $folhaPagamento?->getTotalFuncionario(); //adiciona o null safe (?)


?>
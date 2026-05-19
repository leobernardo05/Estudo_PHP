<?php
    /*$objeto = null;

    $objeto->total();

    if(isset($objeto) && $objeto != null) {
        $objeto->total();
    }*/

    //$objeto?->total();
    class FolhaPagamento {
        public function getTotalFuncionarios(){
            return 25;
        }
    }

    $folhaPagamento = new FolhaPagamento();

    echo $folhaPagamento?->getTotalFuncionario(); //adiciona o null safe (?)


?>
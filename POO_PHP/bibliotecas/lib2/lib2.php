<?php    
    namespace B;

    class Cliente implements \A\CadastroInterface{
        public $nome = 'Santana';
        public function __get($attr){
            return $this->$attr;
        }

        public function excluir(){
            echo 'excluindo';
        }

        public function salvar(){
            echo'excluindo';
        }

    }

    interface CadastroInterface {
        public function excluir();
    }
?>

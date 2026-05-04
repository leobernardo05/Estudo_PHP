<?php    
    namespace B;

    class Cliente implements CadastroInterface{
        public $nome = 'Santana';

        public function __construct(){
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function excluir(){
            echo 'excluindo';
        }

    }

    interface CadastroInterface {
        public function excluir();
    }
?>

<?php
    class Produto{
        private $numero;
        private $descricao;
        private $quantidade;
        private $valor;

        public function __construct(){
            $this->numero = 2;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function setProduto($numero, $descricao, $quantidade, $valor){
            $this->numero = $numero;
            $this->descricao = $descricao;
            $this->quantidade = $quantidade;
            $this->valor = $valor;
        }

        public function __destruct(){
            echo '<div class="row" style="margin-top: 1rem;">';
            echo "Conexão encerrada";
            echo '</div>';
        }
    }
?>
<?php
    class Celular{
        public $nome;
        public $marca;
        public $preco;

        public function novoCelular($nome, $marca, $preco){
            $this->nome = $nome;
            $this->marca = $marca;
            $this->preco = $preco;
        }
    }
?>
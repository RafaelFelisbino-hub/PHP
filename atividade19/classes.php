<?php
    class Cerveja{
        public $nomeCerveja;
        public $teorAlcoolico;

        public function addCerveja($nomeCerveja, $teorAlcoolico){
            $this->nomeCerveja = $nomeCerveja;
            $this->teorAlcoolico = $teorAlcoolico;
        }
    }

    class Bicicleta{
        protected $nomeBicicleta;
        protected $marcaBicicleta;

        public function addBicicleta($nomeBicicleta, $marcaBicicleta){
            $this->nomeBicicleta = $nomeBicicleta;
            $this->marcaBicicleta = $marcaBicicleta;
        }
    }

    class Vga{
        private $nomeVga;
        private $marcaVga;

        public function addVga($nomeVga, $marcaVga){
            $this->nomeVga = $nomeVga;
            $this->marcaVga = $marcaVga;
        }
    }
?>
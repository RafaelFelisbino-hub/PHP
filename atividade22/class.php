<?php 
    interface Conta{
        public function abrirConta($titular, $tipo, $vinculoEmpregaticio, $cttps, $numConta, $saldo, $status);
        public function encerrarConta($status);
        public function depositar($valor);
        public function sacar($valor);
        public function tarifaMensal($chequeEspecial);
    }


    class contaCorrente implements Conta{
        private $numConta;
        private $tipo;
        private $titular;
        private $saldo;
        private $status;
        private $vinculoEmpregaticio;
        private $cttps;
        private $cobranca;
        private $chequeEspecial;

        public function abrirConta($titular, $tipo, $vinculoEmpregaticio, $cttps, $numConta, $saldo, $status){
            $this->titular = $titular;
            $this->tipo = $tipo;
            $this->numConta = $numConta;
            $this->status = true;
            $this->vinculoEmpregaticio = $vinculoEmpregaticio;
            $this->saldo = $saldo;

            if($this->cttps != false)
                $this->cttps = $cttps;

            if($this->vinculoEmpregaticio === true)
                $this->vinculoEmpregaticio = "Empregado";
            else
                $this->vinculoEmpregaticio = "Desempregado";

            if($this->saldo < 200)
                echo "Você deve depositar R$ 200 para abrir a conta";        
        }

        public function encerrarConta($status){
            if($this->saldo === 0){
                $this->status === false;
                echo "Conta encerrada";
            }else {
                echo "Para encerrar conta, saldo necessita ser 0";
            }
        }

        public function depositar($valor){
            $this->saldo += $valor;
            echo "Saldo = R$ {$this->saldo}";
        }

        public function sacar($valor){
            $this->saldo-= $valor;
            echo "Saldo atual = R$ {$this->saldo}";
        }

        public function tarifaMensal($chequeEspecial){
            if(date('d/m/Y',strtotime('+30 days',strtotime(str_replace('/', '-', '25/10/2021'))))){
                $this->saldo -= 29.90;
                if($this->saldo < 0 && $this->chequeEspecial === true){
                    $this->cobranca += 50;
                    echo "Cheque especial = R$ {$this->cobranca}<br>";
                    $this->saldo *= 0.001;
                    echo "Saldo com acréscimo = R$ {$this->saldo}";
                }
                else
                    echo "Conta adimplente";
            } 
        }
    }

    class contaPoupanca implements Conta{
        private $numConta;
        private $tipo;
        private $titular;
        private $saldo;
        private $status;
 
        public function abrirConta($titular, $tipo, $vinculoEmpregaticio, $cttps, $numConta, $saldo, $status){
            $this->titular = $titular;
            $this->tipo = $tipo;
            $this->vinculoEmpregaticio = $vinculoEmpregaticio;
            $this->cttps = $cttps;
            $this->numConta = $numConta;
            $this->saldo += $saldo;
            $this->status = $status;
 
        }
 
        public function encerrarConta($status){
            if($this->saldo === 0){
                $this->status === false;
                echo "Conta encerrada";
            }else {
                echo "Para encerrar conta, saldo necessita ser 0";
            }
        }
 
        public function depositar($valor){
            $rendimento = 0;
            $this->saldo += $valor; 
            echo "Saldo R$ = ".$this->saldo;
            echo"<br>";
            if(date('d/m/Y',strtotime('+30 days',strtotime(str_replace('/', '-', '05/06/2016'))))){
                $rendimento = $this->saldo * 0.0049;
                echo "Rendimento ".$rendimento;
                echo "<br>";
            }
            if($this->saldo < 0){
                echo "Saldo não pode ser menor que 0";
            }                       
        }
 
        public function sacar($saque){
            if($this->saldo > 0){
                $this->saldo -= $saque;
            }
            echo "Você sacou = R$ ".$saque;
            echo"<br>";
            echo "Seu saldo = R$ {$this->saldo}";
        }
        public function tarifaMensal($chequeEspecial){
 
        }
    }
?>
<?php 
class Time{
    private $nome;
    private $cidade;
    private $serie;
    private $vitorias;
    private $derrotas;
    private $empates;
    private $partida;

    public function __construct($nome, $cidade, $serie, $vitorias, $derrotas, $empates, $partida){
        $this->nome = $nome;
        $this->cidade = $cidade;
        $this->serie = $serie;
        $this->vitorias += $vitorias;
        $this->derrotas += $derrotas;
        $this->empates += $empates;
        $this->partida = $partida;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setSerie($serie){
        $this->serie = $serie;
    }

    public function getSerie(){
        return $this->serie;
    }

    public function setVitorias(){
        $this->vitorias++;
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setDerrotas($derrotas){
        $this->derrotas += $derrotas;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setEmpates(){
        $this->empates++;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setPartida($partida){
        $this->partida = $partida;
    }

    public function getPartida(){
        return $this->partida;
    }

    public function tocarHino(){
        echo "Hino inexistente";
    }

    public function ganharPartida(){
        echo "Vitórias = {$this->vitorias}<br>";
    }

    public function perderPartida(){
        echo "Derrotas = {$this->derrotas}<br>";
    }

    public function empatarPartida(){
        echo "Empates = {$this->empates}";
    }
}

class Partida{
    private $timeDaCasa;
    private $timeVisitante;
    private $aprovada;
    private $golCasa;
    private $golVisitante;

    public function __construct($timeDaCasa, $timeVisitante, $aprovada){
        $this->timeDaCasa = $timeDaCasa;
        $this->timeVisitante = $timeVisitante;
        $this->aprovada = $aprovada;
    }

    public function setTimeDaCasa($valor){
        $this->timeDaCasa = $valor;
    }

    public function getTimeDaCasa(){
        return $this->timeDaCasa;
    }

    public function setTimeVisitante($valor){
        $this->timeVisitante = $valor;
    }

    public function getTimeVisitante(){
        return $this->timeVisitante;
    }

    public function marcarPartida($time1, $time2, $aprovacao){
        if($time1 != $time2 && $aprovacao === true){
            echo "Partida marcada";
        }
        else
            echo "Não é possível marcar a partida";
    }
    
    public function jogar(&$time1, &$time2){
        $this->golCasa = rand(0,4);
        $this->golVisitante = rand(0,4);
        
        if($this->golCasa == $this->golVisitante){
            echo "Partida empatada<br>";
            $time1->setEmpates();
            $time2->setEmpates(); 
        }
        if($this->golCasa < $this->golVisitante){
            echo "Vitória do time {$this->timeVisitante}<br>";
            $time2->setVitorias();
        }
        if($this->golCasa > $this->golVisitante){
            echo "Vitória do time {$this->timeDaCasa}<br>";
            $time1->setVitorias();
        }
           
        echo "Gols da casa = {$this->golCasa}<br>";
        echo "Gols visitantes = {$this->golVisitante}";
    }
}
?>